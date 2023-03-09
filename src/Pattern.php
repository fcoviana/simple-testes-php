<?php

namespace App;

class Pattern
{
  private $value;

  public function match($value)
  {
    $this->value = $value;
    return $this;
  }

  public function with(bool $pattern, $handler)
  {
    return $pattern ? $handler() : $this;
  }

  public function otherwise($handler)
  {
    return $handler();
  }

  public function getValue()
  {
    return $this->value;
  }
}

?>