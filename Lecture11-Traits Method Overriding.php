<?php

trait Test
{
    public function sayHello()
    {
        echo "Hello Every Buddy!\n";
    }
}
trait Hi
{
    public function sayHello()
    {
        echo "Hello,😊\n";
    }
}
class One
{
    use Test, Hi {
        Test::sayHello insteadof Hi;
        Hi::sayHello as newHello;
    }
}
$obj = new One;
$obj->sayHello();
echo "<br>";
$obj->newHello();



trait OverActing
{
    private function Actors()
    {
        echo "Ducky , rabica , Husssain Tareen ,Khusra pro max!\n";
    }
}

class TT
{
    use OverActing {
        OverActing::Actors as public Acc;
    }
}

$t = new TT();

$t->Acc();
