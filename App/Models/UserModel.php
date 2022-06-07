<?php

namespace App\Models;

final class UserModel
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $passWord;

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): UserModel // Ao retornar o próprio model, é possível acessar os métodos de forma encadeada.
    {// Ex:. $user = new UserModel | $user->setName()->setPassWord().
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