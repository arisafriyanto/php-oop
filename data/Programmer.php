<?php

//! polymorphism bisa dimasukan kedalam properties dan function argument

class Programmer
{
    public string $name;
    public function __construct(string $name)
    {
        return $this->name = $name;
    }
}

class BackEndProgrammer extends Programmer
{
}
class FrontEndProgrammer extends Programmer
{
}

class Company
{
    //! Property $programmer bukan hanya bisa akses class Programmer saja tapi childnya juga bisa
    public Programmer $programmer; //! polymorphism
}

function sayHelloProgrammer(Programmer $programmer)
{
    // ! Type check and casts return boolean

    if ($programmer instanceof BackEndProgrammer) {
        echo "Hello BackEnd Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof FrontEndProgrammer) {
        echo "Hello FrontEnd Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}
