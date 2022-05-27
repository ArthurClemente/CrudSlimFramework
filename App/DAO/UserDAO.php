<?php

namespace App\DAO;

use App\DAO\Conexao;

class UserDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct(); // Chama o __construct de Conexao, iniciando uma conexão com o banco de dados
    }

    public function teste()
    {
        $users = [
            [
                "id" => 1,
                "usuario" => "user01",
                "senha" => "senha01"
            ],
            [
                "id" => 2,
                "usuario" => "user02",
                "senha" => "senha02"
            ],
            [
                "id" => 3,
                "usuario" => "user03",
                "senha" => "senha03"
            ],
            [
                "id" => 4,
                "usuario" => "user04",
                "senha" => "senha04"
            ],
            [
                "id" => 5,
                "usuario" => "user05",
                "senha" => "senha05"
            ],
        ];


        echo "<pre>";
        foreach ($users as $user) {
            print_r($user);
        }
        die;
    }
}
