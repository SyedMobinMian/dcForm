<?php
declare(strict_types=1);

final class LocationRepository
{
    public function getStatesByCountryId(int $countryId): array
    {
        $db = getDB();
        $stmt = $db->prepare("SELECT id, name FROM states WHERE country_id = :country_id ORDER BY name");
        $stmt->execute([':country_id' => $countryId]);
        return $stmt->fetchAll() ?: [];
    }

    public function getCitiesByStateId(int $stateId): array
    {
        $db = getDB();
        $stmt = $db->prepare("SELECT id, name FROM cities WHERE state_id = :state_id ORDER BY name");
        $stmt->execute([':state_id' => $stateId]);
        return $stmt->fetchAll() ?: [];
    }

    public function getCitiesByCountryId(int $countryId): array
    {
        $db = getDB();
        $stmt = $db->prepare(
            "SELECT DISTINCT c.name
             FROM cities c
             INNER JOIN states s ON s.id = c.state_id
             WHERE s.country_id = :country_id
             ORDER BY c.name"
        );
        $stmt->execute([':country_id' => $countryId]);
        $rows = $stmt->fetchAll() ?: [];

        return array_map(
            static fn(array $row): array => ['id' => $row['name'], 'name' => $row['name']],
            $rows
        );
    }
}
