<?php
declare(strict_types=1);

final class LookupRepository
{
    public function countriesWithCode(): array
    {
        return getDB()->query("SELECT id, code, name FROM countries WHERE is_active = 1 ORDER BY name")->fetchAll() ?: [];
    }

    public function countries(): array
    {
        return getDB()->query("SELECT id, name FROM countries WHERE is_active = 1 ORDER BY name")->fetchAll() ?: [];
    }

    public function purposes(): array
    {
        return getDB()->query("SELECT id, name FROM visit_purposes WHERE is_active = 1 ORDER BY name")->fetchAll() ?: [];
    }

    public function statesByCountryId(int $countryId): array
    {
        $stmt = getDB()->prepare("SELECT id, name FROM states WHERE country_id = :cid ORDER BY name");
        $stmt->execute([':cid' => $countryId]);
        return $stmt->fetchAll() ?: [];
    }

    public function countryIdByName(string $name): ?int
    {
        $stmt = getDB()->prepare("SELECT id FROM countries WHERE name = :name LIMIT 1");
        $stmt->execute([':name' => $name]);
        $row = $stmt->fetch();
        return isset($row['id']) ? (int)$row['id'] : null;
    }
}

