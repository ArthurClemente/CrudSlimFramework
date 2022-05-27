<?php

use App\Controllers\UserController;

use function src\slimConfiguration;

$app = new \Slim\App(slimConfiguration());

// #================================================
$app->get('/', UserController::class . ':getUsers'); // "::class" retorna uma string com o caminho completo(namespace e a classe)
// #================================================

$app->run();