<?php

interface BaseClass1
{
    function Sum($n1, $n2);
}

interface BaseClass2
{
    function Sub($S1, $S2);
}
class DrivedClass implements BaseClass1, BaseClass2
{
    public function Sum($n1, $n2)
    {
        echo $n1 + $n2;
    }
    public function Sub($s1, $s2)
    {
        echo $s1 - $s2;
    }
}


$Sum = new DrivedClass();
$Sum->Sum(6, 94);
echo "<br>";

$Sum = new DrivedClass();
$Sum->Sub(94, 29);
