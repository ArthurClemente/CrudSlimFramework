<?php

use App\Controllers\UserController;

use function src\slimConfiguration;

$app = new \Slim\App(slimConfiguration());

// #================================================
// "::class" retorna uma string com o caminho completo(namespace e a classe)
$app->get('/user', UserController::class . ':getUsers'); // busca os dados
$app->post('/user', UserController::class . ':insertUsers'); // insere os dados
$app->put('/user', UserController::class . ':updateUsers'); // altera os dados
$app->delete('/user', UserController::class . ':deleteUsers'); // deleta o usuário
// #================================================

$app->run();