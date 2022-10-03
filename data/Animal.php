<?php

namespace Data;

abstract class Animal
{
    public string $name;

    abstract public function run(): void; // abstract function wajib di child
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name is running." . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is running." . PHP_EOL;
    }
}
