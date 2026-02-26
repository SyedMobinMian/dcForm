<?php
declare(strict_types=1);

final class PageController
{
    private const ALLOWED = [
        'form' => 'form.php',
        'form-access' => 'form-access.php',
        'thank-you' => 'thank-you.php',
    ];

    public static function render(string $page): void
    {
        if (!isset(self::ALLOWED[$page])) {
            http_response_code(404);
            echo 'Page not found.';
            exit;
        }

        require __DIR__ . '/../../../pages/' . self::ALLOWED[$page];
    }
}

