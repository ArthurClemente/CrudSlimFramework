<?php

namespace App\DAO;

use App\DAO\Conexao;
use App\Models\UserModel;

class UserDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct(); // Chama o __construct de Conexao, iniciando uma conexão com o banco de dados
    }

    public function getAllUsers(): array 
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

        return $users;
    }

    public function insertUser(UserModel $user): void
    {
        $sql = "INSERT INTO CrudArtu
                VALUES(
                    :id,
                    :username,
                    :pass);";
        $pdo = $this->pdo
        ->prepare($sql);
        $pdo->bindValue(':id', $user->getId(), \PDO::PARAM_INT);
        $pdo->bindValue(':username', $user->getName(), \PDO::PARAM_STR);
        $pdo->bindValue(':pass', $user->getPassWord(), \PDO::PARAM_STR);
        $pdo->execute();
    }
}