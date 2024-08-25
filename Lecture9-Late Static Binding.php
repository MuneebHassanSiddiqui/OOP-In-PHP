<?php
class Personal
{
    protected static $name = "MHS<br>";
    protected static $Accounts = "mmunibhassan@gmail.com<br>";
    public function Show()
    {
        echo static::$name; // this is called Late static Binding;
        echo self::$Accounts;
    }
}
class acc extends Personal
{
    public static $name = "Malaikah Muneeb<br>";
    public static $Accounts = "Malaikah@gmail.com<br>";

    public function Show()
    {
        echo "This is Your name : " . parent::$name; // this is called Late static Binding;
        echo "This Is your Account : " . parent::$Accounts;
    }
}
$object = new Personal();
$object->Show();
$clas2 = new acc();
$clas2->Show();
// Personal::$name 
