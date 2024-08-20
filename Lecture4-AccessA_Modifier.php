<?php
//Public Class
class BaseClass
{
    protected $Name;

    function __construct($n = 'No Name')
    {
        $this->Name = $n;
    }
    function Show()
    {
        echo "Your Name ....: " .  $this->Name;
    }
}


class DRclass extends BaseClass
{
    function get()
    {
        echo "Your Name ....: " .  $this->Name;
    }
}
// $Obj1 = new BaseClass("Muneeb Hassan");
// $Obj1->Show();

$Obj2 = new DRclass("Muneeb Hassan");
$Obj2->get();


// $Obj1 = new BaseClass("Muneeb Hassan");
// $Obj1->Show();
