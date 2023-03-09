<?php

namespace Tests;

use \App\Pattern;
use PHPUnit\Framework\TestCase;

class PatternTest extends TestCase
{

    private $pattern;
    private $valueString;
    private $valueNumber;

    public function setUp(): void
    {
        $this->valueString = 'ANY-VALUE';
        $this->valueNumber = 10;
        $this->pattern = new Pattern;
    }


    /** 
     * @test
     * Testa passando um valor em formato de string e executar o otherwise
     */
    public function deveRetornar()
    {
        $fnIpsum = function () {
            return 'Valor ipsum';
        };

        $fnLorem = function () {
            return 'Valor lorem';
        };

        $fnOtherwise = function () {
            return 'Nenhum valor';
        };

        $output = $this->pattern->match($this->valueString)
            ->with($this->pattern->getValue() === 'Lorem', $fnLorem)
            ->with($this->pattern->getValue() === 'Ipsum', $fnIpsum)
            ->otherwise($fnOtherwise);

        $this->assertEquals('Nenhum valor', $output, 'Valida valor da soma dos itens');
    }
}

?>