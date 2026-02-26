<?php
declare(strict_types=1);

require_once __DIR__ . '/../Repositories/TravellerRepository.php';

final class TravellerService
{
    public function __construct(
        private readonly TravellerRepository $repo = new TravellerRepository()
    ) {
    }

    public function getTravellerForCurrentSession(int $travellerNum): array
    {
        $applicationId = (int)($_SESSION['application_id'] ?? 0);
        if ($applicationId <= 0) {
            throw new RuntimeException('Session expired.');
        }

        $travellerDbId = $_SESSION['traveller_ids'][$travellerNum] ?? null;
        if (!$travellerDbId) {
            throw new InvalidArgumentException('Traveller not found.');
        }

        $row = $this->repo->findById((int)$travellerDbId);
        if (!$row) {
            throw new RuntimeException('Traveller record not found in DB.');
        }

        unset($row['application_id']);
        return $row;
    }
}

