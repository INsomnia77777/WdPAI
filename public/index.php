<?php
declare(strict_types=1);

use App\Controller\DefaultController;
use App\Controller\TrickController;
use App\Routing;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$routing = new Routing();

$routing->get('/', DefaultController::class, 'index');
$routing->get('/tricks', TrickController::class, 'index');
$routing->get('/tricks/{id}', TrickController::class, 'show');
$routing->get('/spotfinder', DefaultController::class, 'spotfinder');
$routing->get('/groups', DefaultController::class, 'groups');

$routeFound = $routing->dispatch(
    $_SERVER['REQUEST_METHOD'],
    $_SERVER['REQUEST_URI']
);

if (!$routeFound) {
    (new DefaultController())->notFound();
}