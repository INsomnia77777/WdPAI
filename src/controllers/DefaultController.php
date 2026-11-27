<?php
declare(strict_types=1);

namespace App\Controller;

final class DefaultController extends AppController
{
    public function index(): void
    {
        $this->render('home', [
            'pageTitle' => 'Homepage - BladeCrew'
        ]);
    }

    public function spotfinder(): void
    {
        $this->render('spotfinder', [
            'pageTitle' => 'SpotFinder - BladeCrew'
        ]);
    }

    public function groups(): void
    {
        $this->render('groups', [
            'pageTitle' => 'Groups - BladeCrew'
        ]);
    }

    public function notFound(): void
    {
        http_response_code(404);
        $this->render('not-found', [
            'pageTitle' => '404 Not Found - BladeCrew'
        ]);
    }
}