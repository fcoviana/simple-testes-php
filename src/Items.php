<?php

namespace App;

class Items implements \Countable, \Iterator
{
    private $items = [];
    private $position = 0;
    
    public function add(Item $item)
    {
        return $this->items[] = $item;
    }

    public function getValue()
    {
        return $this->items;
    }

    public function count()
    {
        return count($this->items);
    }

    public function current()
    {
        return $this->items[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        return ++$this->position;
    }

    /**
     * Rewind the Iterator to the first element
     * Rewinds back to the first element of the Iterator.
     * @return void
     */
    public function rewind()
    {
    }

    /**
     * Checks if current position is valid
     * This method is called after Iterator::rewind() and Iterator::next() to check if the current position is valid.
     * @return bool The return value will be casted to `bool` and then evaluated. Returns `true` on success or `false` on failure.
     */
    public function valid()
    {
    }
}
?>