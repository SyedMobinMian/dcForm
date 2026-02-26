<?php
/**
 * backend/ajax/update_traveller_review.php
 * Review page se traveller details inline update.
 */

header('Content-Type: application/json');
session_start();
require_once __DIR__ . '/../../core/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    jsonResponse(false, 'Invalid request method.');
}

if (!verifyCsrf($_POST['csrf_token'] ?? '')) {
    jsonResponse(false, 'Security token invalid.');
}

$applicationId = (int)($_SESSION['application_id'] ?? 0);
if ($applicationId <= 0) {
    jsonResponse(false, 'Session expired.');
}

$travellerNum = (int)($_POST['traveller_num'] ?? 0);
$travellerDbId = $_SESSION['traveller_ids'][$travellerNum] ?? null;
if (!$travellerDbId) {
    jsonResponse(false, 'Traveller not found.');
}

$textFields = [
    'first_name','middle_name','last_name','email','phone','purpose_of_visit',
    'gender','country_of_birth','city_of_birth','marital_status','nationality',
    'passport_country','passport_number','other_citizenship_country','uci_number',
    'address_line','street_number','apartment_number','country','city','postal_code','state',
    'occupation','job_title','employer_name','employer_country','employer_city',
    'visa_refusal_details','tuberculosis_details','criminal_details','health_condition',
    'step_completed',
];
$dateFields = ['travel_date','date_of_birth','passport_issue_date','passport_expiry'];
$boolFields = ['dual_citizen','prev_canada_app','has_job','visa_refusal','tuberculosis','criminal_history','decl_accurate','decl_terms'];
$intFields = ['start_year'];
$allowed = array_merge($textFields, $dateFields, $boolFields, $intFields);

$updates = [];
$params = [':id' => (int)$travellerDbId, ':application_id' => $applicationId];

foreach ($allowed as $field) {
    $key = 'rv_' . $field;
    if (!array_key_exists($key, $_POST)) {
        continue;
    }

    $raw = trim((string)$_POST[$key]);

    if (in_array($field, $dateFields, true)) {
        if ($raw === '') {
            $val = null;
        } else {
            $d = DateTime::createFromFormat('Y-m-d', $raw);
            if (!$d || $d->format('Y-m-d') !== $raw) {
                jsonResponse(false, 'Invalid date for ' . $field . '.');
            }
            $val = $raw;
        }
    } elseif (in_array($field, $boolFields, true)) {
        $val = in_array(strtolower($raw), ['1', 'true', 'yes', 'on'], true) ? 1 : 0;
    } elseif (in_array($field, $intFields, true)) {
        $val = $raw === '' ? null : (int)$raw;
    } else {
        $val = mb_substr(strip_tags($raw), 0, 500);
    }

    $updates[] = "{$field} = :{$field}";
    $params[":{$field}"] = $val;
}

if (empty($updates)) {
    jsonResponse(false, 'No fields to update.');
}

try {
    $db = getDB();
    $sql = "UPDATE travellers SET " . implode(', ', $updates) . " WHERE id = :id AND application_id = :application_id LIMIT 1";
    $stmt = $db->prepare($sql);
    $stmt->execute($params);

    jsonResponse(true, 'Traveller details updated successfully.');
} catch (Throwable $e) {
    error_log('Review update error: ' . $e->getMessage());
    jsonResponse(false, 'Could not update traveller details.');
}



