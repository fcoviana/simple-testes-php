<?php

namespace App\Services;

use App\Models\UsuarioModel;
use App\Repositories\UsuarioRepository;

class UsuarioService
{
    private $usuarioRepository;
    public function __construct(UsuarioRepository $usuarioRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
    }

    function criar(string $id, string $nome)
    {
        $usuario = new UsuarioModel($id, $nome);
        $output = $this->usuarioRepository->insert($usuario);
        return $output;
    }

}
?>