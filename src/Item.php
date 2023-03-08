<?php

namespace App;

class Item
{
    private $product_name;
    private $value;

    public function __construct(string $product_name, int $value)
    {
        $this->product_name = $product_name;
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
?>