<?php
declare(strict_types=1);

namespace App\Controller;

class AppController
{
    protected function render(string $template, array $variables = []): void
    {
        $templatePath = dirname(__DIR__, 2) . '/public/views/' . $template . '.html.php';

        if (!file_exists($templatePath)) {
            http_response_code(404);
            $templatePath = dirname(__DIR__, 2) . '/public/views/not-found.html.php';
        }

        extract($variables);
        include $templatePath;
    }
}