<?php

namespace src;

function slimConfiguration(): \Slim\Container // Retorna o container
{
    $configuration = [ // Mostra em detalhes o erro que ocorreu
        "settings" => [
            "displayErrorDetails" => getenv('DISPLAY_ERRORS_DETAILS'),
        ],
    ];
    return new \Slim\Container($configuration);
}
