<?php

//! Lebih cocok untuk kontrak
//! interface otomatis abstract dan hanya boleh function abstract, tidak boleh function biasa dan property, untuk child bisa lebih dari 1 interface gunakan implements / multiple inheritance

namespace Data;

interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintenance
{
    function isMaintenance(): bool;
}

interface Car extends HasBrand // interface inheritance interface lain pake extends dan boleh lebih dari 1 extends
{
    function drive(): void;

    function getTire(): int;
}

class Avanza implements Car, IsMaintenance
{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "Toyota";
    }

    public function isMaintenance(): bool
    {
        return false;
    }
}
