<?php


trait hello
{
    public function Hi()
    {
        echo "<h1>Hello World</h1>\n";
    }
    public function bye()
    {
        echo "<h1>Bye world</h1>\n";
    }
}
class One
{
    use hello;
}
class two
{
    use hello;
}
class Three
{
    use hello;
}

// instances
$one = new One();
$one->Hi();

$one1 = new One();
$one1->bye();

$two = new two();
$two->bye();

$three = new three();
$three->Hi();
