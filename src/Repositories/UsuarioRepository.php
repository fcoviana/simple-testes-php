<?php

namespace App\Repositories;

use App\Models\UsuarioModel;

class UsuarioRepository
{

    function insert(UsuarioModel $usuario)
    {
        return (object) [
            'id' => $usuario->getId(),
            'nome' => $usuario->getNome(),
            'created_at' => date("m-d-Y")
        ];
    }

}
?>