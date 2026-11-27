<?php
declare(strict_types=1);

namespace App\Controller;

final class TrickController extends AppController
{
    public function index(): void
    {
        $this->render('tricks', [
            'pageTitle' => 'Tricks - BladeCrew'
        ]);
    }

    public function show(int $id): void
    {
        $tricks = [
            1 => ['name' => 'Cross', 'discipline' => 'SLALOM', 'difficulty' => 'BEGINNER'],
            2 => ['name' => 'Powerslide', 'discipline' => 'FREERIDE', 'difficulty' => 'INTERMEDIATE'],
            3 => ['name' => 'Soul grind', 'discipline' => 'AGGRESSIVE', 'difficulty' => 'INTERMEDIATE'],
        ];

        $trick = $tricks[$id] ?? [
            'name' => 'Trick #' . $id,
            'discipline' => 'FREERIDE',
            'difficulty' => 'INTERMEDIATE'
        ];

        $this->render('trick', [
            'pageTitle' => $trick['name'] . ' - BladeCrew',
            'id' => $id,
            'name' => $trick['name'],
            'discipline' => $trick['discipline'],
            'difficulty' => $trick['difficulty']
        ]);
    }
}