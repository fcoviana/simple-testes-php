<?php

namespace App\Models;

class UsuarioModel
{

    private $id;
    private $nome;

    public function __construct(string $id, string $nome)
    {
        $this->id = $id;
        $this->nome = $nome;
    }

    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }
}
?>