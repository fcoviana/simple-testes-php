<?php

namespace App;

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
        return $total;
    }
}
?>