<?php

class Employee
{
    public $Name;
    public $Age;
    public $salary;

    function __construct($na, $ag, $sa)
    {
        $this->Name = $na;
        $this->Age = $ag;
        $this->salary = $sa;
    }

    function info()
    {
        echo "<h2>Employee Status</h2>";
        echo "Name : " . $this->Name . " Age: " . $this->Age . " Salary : " . $this->salary . "<br>";
    }
}


class Manager extends Employee
{
    public $travellingAl = 20000;
    public $Medical = 10000;
    public $TotalSalary;
    function info()
    {
        $this->TotalSalary = $this->travellingAl + $this->Medical + $this->salary;
        echo "<h2>Manager Status</h2>";
        echo "Name : " . $this->Name . " Age: " . $this->Age . " Salary : " . $this->TotalSalary . "<br>";
    }
}

$emp1 = new Employee("Muneeb", 19, 10000000);
$emp2 = new Employee("Yousuf", 21, 900000);
$emp3 = new Employee("Ali", 23, 70000);
$emp4 = new Employee("Hamza", 26, 30000);
//Manager Section
$emp5 = new Manager("Muneeb Hassan Siddique", 26, 3000000);
$emp6 = new Manager("Rohan Hassan Siddique", 22, 2000000);


$emp1->info();
$emp2->info();
$emp3->info();
$emp6->info();
$emp4->info();
$emp5->info();
