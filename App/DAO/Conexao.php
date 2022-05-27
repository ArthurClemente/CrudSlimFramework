<?php

namespace App\DAO;

use PDO;
// Classe com as configurações da conexão com o banco
abstract class Conexao
{
    /**
     * @var \PDO
     */
    protected $pdo;

    public function __construct()
    {
        // Carga das variáveis globais salvas no arquivo env.php
        $serv = getenv('BANCO_SQLSVR_SERVER');
        $datb = getenv('BANCO_SQLSVR_DATABASE');
        $user = getenv('BANCO_SQLSVR_USER');
        $pass = getenv('BANCO_SQLSVR_PASSWORD');

        $dsn = "sqlsrv:Server=$serv; Database=$datb";

        $this->pdo = new \PDO($dsn, $user, $pass);
        $this->pdo->setAttribute(
            // Lança exceções em caso de erros.
            \PDO::ATTR_ERRMODE,
            \PDO::ERRMODE_EXCEPTION
        );
    }


}
