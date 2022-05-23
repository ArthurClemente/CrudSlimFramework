<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;



final class StateController
{
    public function getStates(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([ // O array passado é retornado como Json
            "message" => "Hello World!"
        ]);

        return $response;
    }
}
