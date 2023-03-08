<?php 

namespace App\Exption;

class UnexpectedNonNumericExpetion extends \UnexpectedValueException 
{
    public function __construct($item) 
    {
        parent::__construct("${item} não é um numero");
    }
}

?>