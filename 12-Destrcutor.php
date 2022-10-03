<?php

class Person
{
    const AUTHOR = "Afriyan";

    var string $name;
    var ?string $address;
    var string $country = "Indonesian";  // default value

    function __construct(string $name, ?string $address) // constructor
    {
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hello my name is {$this->name}" . PHP_EOL;
        } else {
            echo "Hello $name, my name is {$this->name}" . PHP_EOL;
        }
    }

    function info()
    {
        echo "AUTHOR: " . self::AUTHOR . PHP_EOL; // self
    }

    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
}


$eko = new Person("Eko", "Subang");
$joko = new Person("Joko", "Subang");

echo "Program Selesai" . PHP_EOL;
