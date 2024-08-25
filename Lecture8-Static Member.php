<?php


class Car
{
    public $Name;
    public $Model;
    public static $CarCount = 0;
    public function __construct($name, $model)
    {

        $this->Name = $name;
        $this->Model = $model;
        self::$CarCount++;
    }

    public  static function GetTotalCar()
    {
        return self::$CarCount;
    }
}
$Car1 = new Car("Honda", "Civic");
$Car2 = new Car("Toyota", "Hilux");
echo "Total Car in showRoom :: " . Car::GetTotalCar();




class Vegan
{
    public static $name;
    public static $Prices;

    public static $totalPrice = 0;

    function __construct($Name, $Prices)
    {
        self::$name = $Name;
        self::$Prices = $Prices;
        self::$totalPrice += $Prices;
    }

    static function TotalPrice()
    {
        return  self::$totalPrice;
    }
}


class Fruits extends Vegan
{
    public function ShowTotalPrice()
    {
        echo "Total Price of All fruit: $" . parent::TotalPrice();
    }
}


$fruit1 = new Fruits("Apple", 20);
$fruit2 = new Fruits("Banana", 30);
$fruit3 = new Fruits("Grapes", 34);

echo "<br>";

$fruit3->ShowTotalPrice();
