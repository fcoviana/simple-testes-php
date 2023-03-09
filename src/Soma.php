<?php

use App\Exption\UnexpectedNonNumericExpetion;

function soma(array $itens)
{
    $total = 0;
    foreach ($itens as $item) {
        if (!is_numeric($item)) {
            throw new UnexpectedNonNumericExpetion($item);
        }
        $total += $item;
    }
    return $total;
}

?>