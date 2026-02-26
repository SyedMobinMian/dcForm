<?php
declare(strict_types=1);

final class ApplicationRepository
{
    public function create(string $reference, string $travelMode, int $totalTravellers): int
    {
        $db = getDB();
        $stmt = $db->prepare(
            "INSERT INTO applications (reference, travel_mode, total_travellers) VALUES (:ref, :mode, :total)"
        );
        $stmt->execute([
            ':ref' => $reference,
            ':mode' => $travelMode,
            ':total' => $totalTravellers,
        ]);

        return (int)$db->lastInsertId();
    }

    public function updateTravelMeta(int $applicationId, string $travelMode, int $totalTravellers): void
    {
        $db = getDB();
        $db->prepare("UPDATE applications SET travel_mode=:mode, total_travellers=:total WHERE id=:id")
            ->execute([
                ':mode' => $travelMode,
                ':total' => $totalTravellers,
                ':id' => $applicationId,
            ]);
    }

    public function findById(int $applicationId): ?array
    {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM applications WHERE id = :id LIMIT 1");
        $stmt->execute([':id' => $applicationId]);
        $row = $stmt->fetch();
        return $row ?: null;
    }
}
