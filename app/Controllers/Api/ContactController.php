<?php
declare(strict_types=1);

require_once __DIR__ . '/../../../modules/forms/validate.php';
require_once __DIR__ . '/../../Services/TravellerContactService.php';

final class ContactController
{
    public static function saveStepContact(): void
    {
        header('Content-Type: application/json');

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            jsonResponse(false, 'Invalid request.');
        }

        if (!verifyCsrf($_POST['csrf_token'] ?? '')) {
            jsonResponse(false, 'Security token invalid. Please refresh the page.');
        }

        $data = [
            'first_name' => clean($_POST['t_first_name'] ?? ''),
            'middle_name' => clean($_POST['t_middle_name'] ?? ''),
            'last_name' => clean($_POST['t_last_name'] ?? ''),
            'email' => clean($_POST['t_email'] ?? ''),
            'phone' => clean($_POST['t_phone'] ?? ''),
            'travel_date' => clean($_POST['t_travel_date'] ?? ''),
            'purpose_of_visit' => clean($_POST['t_purpose_of_visit'] ?? ''),
        ];

        $errors = validateStepContact($data);
        if (!empty($errors)) {
            jsonResponse(false, 'Please fix the errors below.', ['errors' => $errors]);
        }

        $service = new TravellerContactService();

        try {
            $saved = $service->save([
                'travel_mode' => $_POST['travel_mode'] ?? 'solo',
                'total_travellers' => (int)($_POST['total_travellers'] ?? 1),
                'traveller_num' => (int)($_POST['traveller_num'] ?? 1),
                'data' => $data,
            ]);
        } catch (Throwable $e) {
            error_log('Contact save error: ' . $e->getMessage());
            jsonResponse(false, 'Could not save contact details. Please try again.');
        }

        jsonResponse(true, 'Contact details saved.', $saved);
    }
}
