<?php
declare(strict_types=1);

require_once __DIR__ . '/../Repositories/LookupRepository.php';

final class LookupService
{
    public function __construct(
        private readonly LookupRepository $repo = new LookupRepository()
    ) {
    }

    public function byType(string $type, array $query): array
    {
        switch ($type) {
            case 'countries':
                return ['success' => true, 'data' => $this->repo->countriesWithCode()];

            case 'nationalities':
                return ['success' => true, 'data' => $this->repo->countries()];

            case 'purposes':
                return ['success' => true, 'data' => $this->repo->purposes()];

            case 'states':
                $countryId = (int)($query['country_id'] ?? 0);
                if ($countryId <= 0) {
                    return ['success' => true, 'data' => []];
                }
                return ['success' => true, 'data' => $this->repo->statesByCountryId($countryId)];

            case 'country_id_by_name':
                $name = trim((string)($query['name'] ?? ''));
                if ($name === '') {
                    return ['success' => true, 'id' => null];
                }
                return ['success' => true, 'id' => $this->repo->countryIdByName($name)];

            default:
                return [
                    'success' => true,
                    'countries' => $this->repo->countriesWithCode(),
                    'nationalities' => $this->repo->countries(),
                    'purposes' => $this->repo->purposes(),
                ];
        }
    }
}

