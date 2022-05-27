<?php

namespace App\Controllers;

use App\DAO\UserDAO;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;



final class UserController
{
    public function getUsers(Request $request, Response $response, array $args)
    {
        $response = $response->withJson([
            "message" => "UserController"
        ]);

        $usersDAO = new UserDAO();
        $usersDAO->teste();

        return $response;
    }
}