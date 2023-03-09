<?php

namespace Tests;

use App\Models\UsuarioModel;
use App\Repositories\UsuarioRepository;
use \App\Services\UsuarioService;
use PHPUnit\Framework\TestCase;

class UsuarioServiceTest extends TestCase
{

    private $repository;
    private $service;
    private $result;

    public function setUp(): void
    {
        $this->repository = $this->createMock(UsuarioRepository::class);
        $this->service = new UsuarioService($this->repository);
        $this->result = (object) [
            'id' => '1',
            'nome' => 'any-nome',
            'created_at' => date("m-d-Y")
        ];
        $this->repository->method('insert')->willReturn($this->result);
    }


    /** 
     * @test
     * Testa retorno do usuario criado
     */
    public function deveValidarORetorno()
    {
        $result = $this->service->criar('1', 'any-nome');
        $this->assertEquals($this->result, $result);
    }


    /** 
     * @test
     * Testa a chamada do repository
     */
    public function deveChamarRepository()
    {
        $this->repository->expects($this->once())
            ->method('insert')
            ->with(new UsuarioModel('1', 'any-nome'));
        $this->service->criar('1', 'any-nome');
    }
}

?>