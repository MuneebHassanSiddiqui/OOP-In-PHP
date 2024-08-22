<?php

class Base
{

    public $Number1, $Number2, $Number3;

    function methods()
    {
        echo $this->Number3 = $this->Number1 = 10 * $this->Number2 = 20;
    }
}

class Drived extends Base
{

    public $Number1 = 30, $Number2 = 10, $Number3; //this is called property overriding

    function methods() // this is called Methood overriding
    {
        echo $this->Number3 = $this->Number1 + $this->Number2;
    }
}

$obj1 = new Base();
$obj1->methods();

$obj3 = new Drived();
$obj3->methods();
