<?php
declare(strict_types=1);

namespace App\Controller;

final class TrickController extends AppController
{
    public function index(): void
    {
        $this->render('tricks');
    }

    public function show(int $id): void
    {
        $trickName = 'Soul Grind';
        $difficulty = 'Medium';

        $this->render('trick', [
            'id' => $id,
            'name' => $trickName,
            'difficulty' => $difficulty
        ]);
    }
}