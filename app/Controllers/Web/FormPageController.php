<?php
declare(strict_types=1);

final class FormPageController
{
    private const ALLOWED = ['Canada', 'Vietnam', 'UK'];

    public static function render(string $country): void
    {
        if (!in_array($country, self::ALLOWED, true)) {
            http_response_code(404);
            echo 'Form not found.';
            exit;
        }

        define('FORM_COUNTRY', $country);
        require __DIR__ . '/../../../pages/form.php';
    }
}

