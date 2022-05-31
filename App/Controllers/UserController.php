<?php

namespace App\Controllers;

use App\DAO\UserDAO;
use App\Models\UserModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;



final class UserController
{
    public function getUsers(Request $request, Response $response, array $args): Response
    {
        
        $userDAO = new UserDAO();
        $users = $userDAO->getAllUsers();
        $response = $response->withJson($users);

        return $response;
    }
    
    public function insertUsers(Request $request, Response $response, array $args): Response
    {

        $data = $request->getParsedBody();

        $userDAO = new UserDAO();
        $user = new UserModel(); // instancia o model de usuário
        $user->setId($data['id']) // Insere as variávies passadas no corpo da requisição "json" nas variáveis de UserModel.
            ->setName($data['username'])
            ->setPassWord($data['pass']);

        $userDAO->insertUser($user);

        $response = $response->withJson([
            'message' => 'Usuário inserido com sucesso!!'
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