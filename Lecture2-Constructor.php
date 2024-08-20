<?php

class Person_Info
{
    public $Name;
    public   $Age;
    public $phone;
    public  $city;


    function __construct($name, $age, $city, $phone)
    {
        $this->Name = $name;
        $this->Age = $age;
        $this->phone = $phone;
        $this->city = $city;
    }
    function showInfo()
    {
        echo "Name:" . $this->Name . "  Age:" .  $this->Age . "  City:" .  $this->city . "   Phone:" . $this->phone . "<br>";
    }
}

$person = new Person_Info("Muneeb Hassan", 21, 3452935860, "Karachi");
$person1 = new Person_Info("Yousuf Naveed", 23, 3348782888, "Karachi");
$person2 = new Person_Info("Hassan Ibrahim", 19, 8293829392, "Islambad");
$person3 = new Person_Info("Saim Zia", 19, 28939292, "Lahore");
$person4 = new Person_Info("Hasan Zia", 18, 920328983, "Karachi");
$person5 = new Person_Info("Qaseem", 20, 829839289, "Karachi");
$person6 = new Person_Info("Ali Ahmed", 29, 57263727, "Islamabad");
$person7 = new Person_Info("Hussain", 19, 72378278273, "Manshera");
$person8 = new Person_Info("Zia Pathan", 38, 38293892, "Hunza District");
$person9 = new Person_Info("Imran Pig", 28, 2823892, "Islamabad");

$person->showInfo();
$person1->showInfo();
$person2->showInfo();
$person3->showInfo();
$person4->showInfo();
$person5->showInfo();
$person6->showInfo();
$person7->showInfo();
$person8->showInfo();
$person9->showInfo();

