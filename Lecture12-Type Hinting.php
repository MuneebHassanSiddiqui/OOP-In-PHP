<?php

//Data Type & Typing Hinting

// Different Types in PHP
// As of PHP 8.0, PHP has thirteen different types you can specify for declarations in your code. Let's take a look at each of them below:
// string - Value must be a string.
// int - Value must be an integer.
// float - Value must be a floating-point number.
// bool - Value must be Boolean (i.e., either true or false).
// array - Value must be an array.
// iterable - Value must be an array or object that can be used with the foreach loop.
// callable - Value must be a callable function.
// parent - Value must be an instance of the parent to the defining class. This can only be used on class and instance methods.
// self - Value must be either an instance of the class that defines the method or a child of the class. This can only be used on class and instance methods.
// interface name - Value must be an object that implements the given interface.
// class name - Value must be an instance of the given class name.
// mixed - Value can be any type.
// void - Value must be nothing. It can only be used in function returns.



//1>> int - Value must be an integer.
function NUmbers(int $num)
{
    echo $num + 17;
}
NUmbers(20);
// NUmbers("Hey"); //Fatal error: Uncaught TypeError: NUmbers(): Argument #1 ($num) must be of type int,


//2>> array - Value must be an array.
function car(array $cars)
{
    foreach ($cars as $key => $value) {
        echo $value . "</br>";
    }
}


$var = ["Tesla", "Toyota", "Suzuki", "Honda", "Lamborgani"];
car($var);
// car("11"); // ERROR: Type must be in array 


// 3>> class name - Value must be an instance of the given class name.
class car
{
    function car1()
    {
        echo "Tesla", "Toyota", "Suzuki", "Honda", "Lamborgani";
    }
}

class bike
{
    function bike()
    {
        echo "H2r", "Suzuki HayaBusa", "Honda 125";
    }
}

function CallCar(car $callC)
{
    $callC->car1();
}

// $CC = new car();

CallCar($CC);


function CallBike(bike $callb)
{
    $callb->bike();
}

$BB = new bike();

// CallBike($BB);



class School
{
    function School($V)
    {
        foreach ($V->Name() as $key => $value) {
            echo $value . "</Br>";
        }
    }
}

class student
{
    function Name()
    {
        return ["Muneeb", "Hassan", "Hello", "World"];
    }
}


// $sch = new School();
// $Stu = new student();

// $sch->School($Stu);
