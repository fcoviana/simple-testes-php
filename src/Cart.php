<?php

namespace App;

// use \App\Items;
// use \App\Item;

// use App\Exption\UnexpectedNonNumericExpetion;

class Cart
{

    function getTotal(Items $itens)
    {   
        $total = 0;
        for ($i = 0; $i < $itens->count(); $i++) { 
            $item = $itens->current();
            $total += $item->getValue();
            $itens->next();
        }
        // foreach ($itens as $item) {
        //     // if (!is_numeric($item)) {
        //     //     throw new UnexpectedNonNumericExpetion($item);
        //     // }
        //     $total += $item->getValue();
        // }
        
        return $total;
    }
}
?>