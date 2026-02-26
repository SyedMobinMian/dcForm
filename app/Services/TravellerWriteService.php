<?php
declare(strict_types=1);

require_once __DIR__ . '/../../backend/validate.php';
require_once __DIR__ . '/../Repositories/TravellerRepository.php';
require_once __DIR__ . '/../Repositories/ApplicationRepository.php';

final class TravellerWriteService
{
    private const NO_JOB = ['Retired', 'Unemployed', 'Homemaker'];

    public function __construct(
        private readonly TravellerRepository $travellers = new TravellerRepository(),
        private readonly ApplicationRepository $applications = new ApplicationRepository()
    ) {
    }

    private function resolveSessionTravellerId(int $travellerNum): int
    {
        $applicationId = (int)($_SESSION['application_id'] ?? 0);
        if ($applicationId <= 0) {
            throw new RuntimeException('Session expired. Please start again.');
        }

        if ($travellerNum < 1) {
            $travellerNum = 1;
        }

        $travellerDbId = $_SESSION['traveller_ids'][$travellerNum] ?? null;
        if (!$travellerDbId) {
            throw new InvalidArgumentException('Traveller record not found.');
        }

        return (int)$travellerDbId;
    }

    public function savePersonal(array $post): void
    {
        $travellerId = $this->resolveSessionTravellerId((int)($post['traveller_num'] ?? 1));

        $data = [
            'date_of_birth' => clean(trim((string)($post['t_date_of_birth'] ?? ''))),
            'gender' => clean(trim((string)($post['t_gender'] ?? ''))),
            'country_of_birth' => clean(trim((string)($post['t_country_of_birth'] ?? ''))),
            'city_of_birth' => clean(trim((string)($post['t_city_of_birth'] ?? ''))),
            'marital_status' => clean(trim((string)($post['t_marital_status'] ?? ''))),
            'nationality' => clean(trim((string)($post['t_nationality'] ?? ''))),
        ];
        if ($data['date_of_birth'] === '') {
            $data['date_of_birth'] = null;
        }

        $errors = validateStepPersonal($data);
        if (!empty($errors)) {
            throw new DomainException(json_encode($errors));
        }

        $this->travellers->updateFields($travellerId, [
            'date_of_birth' => $data['date_of_birth'],
            'gender' => $data['gender'],
            'country_of_birth' => $data['country_of_birth'],
            'city_of_birth' => $data['city_of_birth'],
            'marital_status' => $data['marital_status'],
            'nationality' => $data['nationality'],
            'step_completed' => 'personal',
        ]);
    }

    public function savePassport(array $post): void
    {
        $travellerId = $this->resolveSessionTravellerId((int)($post['traveller_num'] ?? 1));

        $data = [
            'passport_country' => clean((string)($post['t_passport_country'] ?? '')),
            'passport_number' => strtoupper(clean((string)($post['t_passport_number'] ?? ''))),
            'passport_number_confirm' => strtoupper(clean((string)($post['t_passport_number_confirm'] ?? ''))),
            'passport_issue_date' => clean((string)($post['t_passport_issue_date'] ?? '')),
            'passport_expiry' => clean((string)($post['t_passport_expiry'] ?? '')),
            'dual_citizen' => clean((string)($post['t_dual_citizen'] ?? '0')),
            'other_citizenship_country' => clean((string)($post['t_other_citizenship_country'] ?? '')),
            'prev_canada_app' => clean((string)($post['t_prev_canada_app'] ?? '0')),
            'uci_number' => clean((string)($post['t_uci_number'] ?? '')),
        ];

        $errors = validateStepPassport($data);
        if (!empty($errors)) {
            throw new DomainException(json_encode($errors));
        }

        $this->travellers->updateFields($travellerId, [
            'passport_country' => $data['passport_country'],
            'passport_number' => $data['passport_number'],
            'passport_issue_date' => $data['passport_issue_date'],
            'passport_expiry' => $data['passport_expiry'],
            'dual_citizen' => $data['dual_citizen'],
            'other_citizenship_country' => $data['other_citizenship_country'],
            'prev_canada_app' => $data['prev_canada_app'],
            'uci_number' => $data['uci_number'],
        ]);
    }

    public function saveResidential(array $post): void
    {
        $travellerId = $this->resolveSessionTravellerId((int)($post['traveller_num'] ?? 1));

        $data = [
            'address_line' => clean((string)($post['t_address_line'] ?? '')),
            'street_number' => clean((string)($post['t_street_number'] ?? '')),
            'apartment_number' => clean((string)($post['t_apartment_number'] ?? '')),
            'country' => clean((string)($post['t_country'] ?? '')),
            'city' => clean((string)($post['t_city'] ?? '')),
            'postal_code' => clean((string)($post['t_postal_code'] ?? '')),
            'state' => clean((string)($post['t_state'] ?? '')),
            'occupation' => clean((string)($post['t_occupation'] ?? '')),
            'job_title' => clean((string)($post['t_job_title'] ?? '')),
            'employer_name' => clean((string)($post['t_employer_name'] ?? '')),
            'employer_country' => clean((string)($post['t_employer_country'] ?? '')),
            'employer_city' => clean((string)($post['t_employer_city'] ?? '')),
            'start_year' => clean((string)($post['t_start_year'] ?? '')),
        ];

        $errors = validateStepResidential($data);
        if (!empty($errors)) {
            throw new DomainException(json_encode($errors));
        }

        $hasJob = !empty($data['occupation']) && !in_array($data['occupation'], self::NO_JOB, true) ? 1 : 0;

        $this->travellers->updateFields($travellerId, [
            'address_line' => $data['address_line'],
            'street_number' => $data['street_number'],
            'apartment_number' => $data['apartment_number'],
            'country' => $data['country'],
            'city' => $data['city'],
            'postal_code' => $data['postal_code'],
            'state' => $data['state'],
            'occupation' => $data['occupation'],
            'has_job' => $hasJob,
            'job_title' => $data['job_title'],
            'employer_name' => $data['employer_name'],
            'employer_country' => $data['employer_country'],
            'employer_city' => $data['employer_city'],
            'start_year' => $data['start_year'],
        ]);
    }

    public function saveBackground(array $post): void
    {
        $travellerId = $this->resolveSessionTravellerId((int)($post['traveller_num'] ?? 1));

        $data = [
            'visa_refusal' => clean((string)($post['t_visa_refusal'] ?? '')),
            'visa_refusal_details' => clean((string)($post['t_visa_refusal_details'] ?? '')),
            'tuberculosis' => clean((string)($post['t_tuberculosis'] ?? '')),
            'tuberculosis_details' => clean((string)($post['t_tuberculosis_details'] ?? '')),
            'criminal_history' => clean((string)($post['t_criminal_history'] ?? '')),
            'criminal_details' => clean((string)($post['t_criminal_details'] ?? '')),
            'health_condition' => clean((string)($post['t_health_condition'] ?? '')),
        ];

        $errors = validateStepBackground($data);
        if (!empty($errors)) {
            throw new DomainException(json_encode($errors));
        }

        $this->travellers->updateFields($travellerId, [
            'visa_refusal' => $data['visa_refusal'],
            'visa_refusal_details' => $data['visa_refusal_details'],
            'tuberculosis' => $data['tuberculosis'],
            'tuberculosis_details' => $data['tuberculosis_details'],
            'criminal_history' => $data['criminal_history'],
            'criminal_details' => $data['criminal_details'],
            'health_condition' => $data['health_condition'],
        ]);
    }

    public function saveDeclaration(array $post): array
    {
        $travellerNum = (int)($post['traveller_num'] ?? 1);
        $travellerId = $this->resolveSessionTravellerId($travellerNum);

        $data = [
            'decl_accurate' => clean((string)($post['t_decl_accurate'] ?? '0')),
            'decl_terms' => clean((string)($post['t_decl_terms'] ?? '0')),
        ];

        $errors = validateStepDeclaration($data);
        if (!empty($errors)) {
            throw new DomainException(json_encode($errors));
        }

        $this->travellers->updateFields($travellerId, [
            'decl_accurate' => 1,
            'decl_terms' => 1,
            'step_completed' => 'declaration',
        ]);

        $totalTravellers = (int)($_SESSION['total_travellers'] ?? 1);
        if ($totalTravellers < 1) {
            $totalTravellers = 1;
        }

        return [
            'travel_mode' => (string)($_SESSION['travel_mode'] ?? 'solo'),
            'total_travellers' => $totalTravellers,
            'current_traveller' => $travellerNum,
            'all_done' => ($travellerNum >= $totalTravellers),
        ];
    }

    public function updateReview(array $post): void
    {
        $applicationId = (int)($_SESSION['application_id'] ?? 0);
        if ($applicationId <= 0) {
            throw new RuntimeException('Session expired.');
        }

        $travellerNum = (int)($post['traveller_num'] ?? 0);
        $travellerDbId = $_SESSION['traveller_ids'][$travellerNum] ?? null;
        if (!$travellerDbId) {
            throw new InvalidArgumentException('Traveller not found.');
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
        foreach ($allowed as $field) {
            $key = 'rv_' . $field;
            if (!array_key_exists($key, $post)) {
                continue;
            }

            $raw = trim((string)$post[$key]);

            if (in_array($field, $dateFields, true)) {
                if ($raw === '') {
                    $updates[$field] = null;
                } else {
                    $d = DateTime::createFromFormat('Y-m-d', $raw);
                    if (!$d || $d->format('Y-m-d') !== $raw) {
                        throw new InvalidArgumentException('Invalid date for ' . $field . '.');
                    }
                    $updates[$field] = $raw;
                }
            } elseif (in_array($field, $boolFields, true)) {
                $updates[$field] = in_array(strtolower($raw), ['1', 'true', 'yes', 'on'], true) ? 1 : 0;
            } elseif (in_array($field, $intFields, true)) {
                $updates[$field] = $raw === '' ? null : (int)$raw;
            } else {
                $updates[$field] = mb_substr(strip_tags($raw), 0, 500);
            }
        }

        if (empty($updates)) {
            throw new InvalidArgumentException('No fields to update.');
        }

        $this->travellers->updateFieldsByApplication((int)$travellerDbId, $applicationId, $updates);
    }
}

