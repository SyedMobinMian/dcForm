<?php
declare(strict_types=1);

require_once __DIR__ . '/../../Services/LookupService.php';

final class LookupController
{
    public static function handle(): void
    {
        header('Content-Type: application/json');
        header('Cache-Control: public, max-age=3600');

        $service = new LookupService();
        $type = (string)($_GET['type'] ?? '');

        try {
            echo json_encode($service->byType($type, $_GET));
        } catch (Throwable $e) {
            error_log('Lookup API Error: ' . $e->getMessage());
            echo json_encode(['success' => false, 'message' => 'Lookup fetch failed.']);
        }
    }
}

