<?php

class Calculations
{
    public $v1, $v2, $v3; //This is called Properties
    function Add()
    {
        $this->v3 = $this->v1 + $this->v2;
        return $this->v3;
    }
    function sub()
    {
        $this->v3 = $this->v1 - $this->v2;
        return $this->v3;
    }
    function mul()
    { {
            $this->v3 = $this->v1 * $this->v2;
            return $this->v3;
        }
    }
}

$cal1 = new Calculations();
$cal1->v1 = 100;
$cal1->v2 = 2000;
$Subtraction = new Calculations();
$Subtraction->v1 = 2;
$Subtraction->v2 = 9;



echo "Record Add Successfully = " . $Subtraction->Add() . '<br>';
echo "Multiple Successfully = " . $Subtraction->mul() . '<br>';
echo "Add Record Successfully = " . $cal1->Add() .  "<br>";
echo "Subtract Record Successfully = " . $cal1->sub();
