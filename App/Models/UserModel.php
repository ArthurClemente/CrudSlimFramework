<?php

namespace App\Models;

final class UserModel
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $passWord;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    public function setId($id): UserModel // Ao retornar o próprio model, é possível acessar os métodos de forma encadeada.
    {   // Ex:. $user = new UserModel | $user->setId()->setName()->setPassWord().
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): UserModel
    {
        $this->name = $name;
        return $this;
    }

    public function getPassWord(): string
    {
        return $this->passWord;
    }
    public function setPassWord(string $passWord): UserModel
    {
        $this->passWord = $passWord;
        return $this;
    }

}