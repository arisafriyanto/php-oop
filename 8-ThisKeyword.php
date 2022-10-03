<?php

// class Person
// {
//     var string $name;
//     var ?string $address;
//     var string $country = "Indonesian";  // default value

//     function sayHello(?string $name)
//     {
//         if (is_null($name)) {
//             echo "Hello my name is {$this->name}" . PHP_EOL; // $this itu objecnya sendiri
//         } else {
//             echo "Hello $name, my name is {$this->name}" . PHP_EOL;
//         }
//     }
// }

require_once "data/Person.php";

$person = new Person();
$person->name = "Afriyan";

$person->sayHello(null);

$person->sayHello("Aris");
