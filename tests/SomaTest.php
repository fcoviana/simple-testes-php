<?php

namespace Tests;

use \App\Exption\UnexpectedNonNumericExpetion;
use PHPUnit\Framework\TestCase;

require __DIR__ . '/../src/Soma.php';


/** 
 * @test
 * soma - função de somar numeros
 */
class SomaTest extends TestCase
{

    private $items;
    public function setUp(): void
    {
        $this->items = [1, 2, 3];
    }


    /** 
     * @test
     * Testa para somar os itens
     */
    public function deveRetornarSomadosItems()
    {
        $total = soma($this->items);
        $this->assertEquals(6, $total, 'Valida valor da soma dos itens');
    }


    /** 
     * @test
     * Testa passando um array com strings
     */
    public function deveRetornarTotalCorreto()
    {
        $itemsComStrings = ['lorem', 'ipsum'];
        $this->expectException(UnexpectedNonNumericExpetion::class);
        soma($itemsComStrings);
    }

    /** 
     * @test
     * Testa passando um array vazio
     */
    public function deveRetornarZeroQuandoArrayVazio()
    {
        $total = soma([]);
        $this->assertEquals(0, $total, 'Retorna o valor 0');
    }
}

?>