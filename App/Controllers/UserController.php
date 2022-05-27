<?php

namespace App\Controllers;

use App\DAO\UserDAO;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;



final class UserController
{
    public function getUsers(Request $request, Response $response, array $args): Response
    {
        
        $userDAO = new UserDAO();
        $userDAO->getAllUsers();


        return $response;
    }
    public function insertUsers(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'new world'
        ]);

        return $response;
    }
    public function updateUsers(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'hell world'
        ]);

        return $response;
    }
    public function deleteUsers(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'bye world'
        ]);

        return $response;
    }
}