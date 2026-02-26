<?php
declare(strict_types=1);

require_once __DIR__ . '/../../Services/LocationService.php';

final class LocationController
{
    public static function getStates(): void
    {
        header('Content-Type: application/json');

        $countryId = (int)($_GET['country_id'] ?? 0);
        $service = new LocationService();

        try {
            echo json_encode($service->statesByCountry($countryId));
        } catch (Throwable $e) {
            error_log('Fetch states error: ' . $e->getMessage());
            echo json_encode(['error' => 'Could not load states']);
        }
    }

    public static function getCities(): void
    {
        header('Content-Type: application/json');

        $stateId = (int)($_GET['state_id'] ?? 0);
        $service = new LocationService();

        try {
            echo json_encode($service->citiesByState($stateId));
        } catch (Throwable $e) {
            error_log('Fetch cities error: ' . $e->getMessage());
            echo json_encode(['error' => 'Could not load cities']);
        }
    }

    public static function getCitiesByCountry(): void
    {
        header('Content-Type: application/json');

        $countryId = (int)($_GET['country_id'] ?? 0);
        $service = new LocationService();

        try {
            echo json_encode($service->citiesByCountry($countryId));
        } catch (Throwable $e) {
            error_log('Fetch cities by country error: ' . $e->getMessage());
            echo json_encode([]);
        }
    }
}
