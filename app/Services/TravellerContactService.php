<?php
declare(strict_types=1);

require_once __DIR__ . '/../Repositories/ApplicationRepository.php';
require_once __DIR__ . '/../Repositories/TravellerRepository.php';

final class TravellerContactService
{
    public function __construct(
        private readonly ApplicationRepository $applications = new ApplicationRepository(),
        private readonly TravellerRepository $travellers = new TravellerRepository()
    ) {
    }

    public function save(array $input): array
    {
        $travelMode = in_array($input['travel_mode'] ?? '', ['solo', 'group'], true)
            ? $input['travel_mode']
            : 'solo';

        $totalTravellers = (int)($input['total_travellers'] ?? 1);
        if ($totalTravellers < 1 || $totalTravellers > 10) {
            $totalTravellers = 1;
        }

        $travellerNum = (int)($input['traveller_num'] ?? 1);
        if ($travellerNum < 1) {
            $travellerNum = 1;
        }

        if ($travellerNum === 1 && empty($_SESSION['application_id'])) {
            $reference = generateReference();
            $applicationId = $this->applications->create($reference, $travelMode, $totalTravellers);

            $_SESSION['application_id'] = $applicationId;
            $_SESSION['application_ref'] = $reference;
            $_SESSION['travel_mode'] = $travelMode;
            $_SESSION['total_travellers'] = $totalTravellers;
        }

        if (empty($_SESSION['application_id'])) {
            throw new RuntimeException('Application session not found.');
        }

        $applicationId = (int)$_SESSION['application_id'];
        $this->applications->updateTravelMeta($applicationId, $travelMode, $totalTravellers);
        $_SESSION['travel_mode'] = $travelMode;
        $_SESSION['total_travellers'] = $totalTravellers;

        $travellerDbId = $_SESSION['traveller_ids'][$travellerNum] ?? null;
        if ($travellerDbId) {
            $this->travellers->updateContact((int)$travellerDbId, $input['data']);
            $savedTravellerId = (int)$travellerDbId;
        } else {
            $savedTravellerId = $this->travellers->createContact($applicationId, $travellerNum, $input['data']);
            $_SESSION['traveller_ids'][$travellerNum] = $savedTravellerId;
        }

        return [
            'application_ref' => (string)($_SESSION['application_ref'] ?? ''),
            'traveller_id' => $savedTravellerId,
        ];
    }
}

