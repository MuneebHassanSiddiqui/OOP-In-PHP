<?php

abstract class Animal
{
    public $deer;
    public $Loin;

    abstract protected function sound($a, $b); // delcare here but class implement coding here 
}

class Dog extends Animal
{
    public function sound($a, $b)
    {
        echo  $this->deer = "This is deer Sound : " . $a . "<br>";
        echo $this->Loin = " This is Loin Sound : " . $b . "<br>";
    }
}


$obj = new Dog();
$obj->sound("grunt,grunt,grunt", "Roar,Roar,Roar");
//  "Roar,Roar,Roar" . "<br>"
//  "grunt,grunt,grunt" . "<br>"


// Basic school system using the Abstract class

abstract class person
{
    public $name;
    public $age;

    public function __construct($n, $a)
    {
        $this->name = $n;
        $this->age = $a;
    }

    abstract protected function getRole();
}


class student extends person
{
    public $grade;

    public function __construct($n, $a, $g)
    {
        parent::__construct($n, $a);
        $this->grade = $g;
    }

    public function getRole()
    {
        return "Student";
    }
    public function getDetails()
    {

        return "Name : $this->name , Age : $this->age, Grade : $this->grade";
    }
}


class teachers extends person
{
    public $subject;

    public function __construct($n, $a, $s)
    {
        parent::__construct($n, $a);
        $this->subject = $s;
    }

    public function getRole()
    {
        return "Teacher";
    }

    public function getDetails()
    {
        return "Name : $this->name , Age : $this->age, Grade : $this->subject";
    }
}


$student = new student("Muneeb Hassan", 19, "A+");
echo $student->getDetails();
echo "<br>";

$teacher = new teachers("SMAS", 23, "English");
echo $teacher->getDetails();
