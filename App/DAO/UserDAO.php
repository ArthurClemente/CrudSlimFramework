<?php

namespace App\DAO;

use App\DAO\Conexao;

class UserDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct(); // Chama o __construct de Conexao, iniciando uma conexão com o banco de dados
    }

    public function getAllUsers() 
    {
        $pdo = $this->pdo;

        $sql = "
            SELECT 
                *
            FROM
                CrudArtu
            ;";
        
        $query = $pdo->prepare($sql);
        $query->execute();

        $users = $query->fetchAll(\PDO::FETCH_ASSOC);

        echo "<pre>";
        foreach($users as $user)
        {
            print_r($user);
        }
    }
}