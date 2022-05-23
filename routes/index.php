<?php

use App\Controllers\StateController;

use function src\slimConfiguration;

$app = new \Slim\App(slimConfiguration());

// #================================================
$app->get('/', StateController::class . ':getStates'); // "::class" retorna uma string com o caminho completo(namespace e a classe)
// #================================================

$app->run();