<?php
declare(strict_types=1);

require_once __DIR__ . '/../../Services/TravellerService.php';

final class TravellerController
{
    public static function getByNumber(): void
    {
        header('Content-Type: application/json');

        $travellerNum = (int)($_GET['traveller_num'] ?? 1);
        if ($travellerNum < 1) {
            $travellerNum = 1;
        }

        $service = new TravellerService();
        try {
            $traveller = $service->getTravellerForCurrentSession($travellerNum);
            jsonResponse(true, 'OK', ['traveller' => $traveller]);
        } catch (InvalidArgumentException $e) {
            jsonResponse(false, $e->getMessage());
        } catch (RuntimeException $e) {
            jsonResponse(false, $e->getMessage());
        } catch (Throwable $e) {
            error_log('Fetch Traveller Error: ' . $e->getMessage());
            jsonResponse(false, 'Database error while fetching data.');
        }
    }
}

