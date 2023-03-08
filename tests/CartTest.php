<?php

namespace Tests;

use \App\Exption\UnexpectedNonNumericExpetion;
use \App\Cart;
use \App\Item;
use \App\Items;
use PHPUnit\Framework\TestCase;

// require __DIR__ . '/../src/Cart.php';
// require __DIR__ . '/../src/UnexpectedNonNumericExpetion.php';

class CartTest extends TestCase
{

    private $cart;
    private $items;
    public function setUp(): void
    {
        $this->items = new Items;
        $this->items->add(new Item('Fanta uva', 5));
        $this->items->add(new Item('Coca cola', 7));
        $this->cart = new Cart;
    }


    /** 
     * @test
     * Testa items
     */
    public function deveRetornarItems()
    {   
        $total = $this->cart->getTotal($this->items);
        $this->assertEquals(12, $total, 'Valida valor da soma dos itens');
    }


    // /** 
    //  * @test
    //  * Testa passando um array com numeros
    //  */
    // public function deveRetornarTotalCorreto()
    // {   
    //     $total = $this->cart->getTotal($this->items);
    //     $this->assertEquals(10, $total);
    // }

    /** 
     * @test
     * Testa passando um array vazio
     */
    // public function deveRetornarZeroQuandoArrayVazio()
    // {
    //     $total = $this->cart->getTotalCart([]);
    //     $this->assertEquals(0, $total);
    // }

    /** 
     * @test
     * Testa passando um array de strings
     */
    // public function deveLancarUmErrorQuandoArrayString()
    // {
    //     $items = ['lorem', 'ipsum'];
    //     $this->expectException(UnexpectedNonNumericExpetion::class);
    //     $this->cart->getTotalCart($items);
    // }

}

?>