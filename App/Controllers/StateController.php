<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;



final class StateController
{
    public function getStates(Request $request, Response $response, array $args): Response
    {
        $response->getBody()->write("State controller chamado!!!!");
        
        return $response;
    }
}