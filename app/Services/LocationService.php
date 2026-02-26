<?php
declare(strict_types=1);

require_once __DIR__ . '/../Repositories/LocationRepository.php';

final class LocationService
{
    public function __construct(
        private readonly LocationRepository $locations = new LocationRepository()
    ) {
    }

    public function statesByCountry(int $countryId): array
    {
        if ($countryId <= 0) {
            return [];
        }

        return $this->locations->getStatesByCountryId($countryId);
    }

    public function citiesByState(int $stateId): array
    {
        if ($stateId <= 0) {
            return [];
        }

        return $this->locations->getCitiesByStateId($stateId);
    }

    public function citiesByCountry(int $countryId): array
    {
        if ($countryId <= 0) {
            return [];
        }

        return $this->locations->getCitiesByCountryId($countryId);
    }
}
