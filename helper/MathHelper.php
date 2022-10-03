<?php

namespace Helper;

class MathHelper
{
    //? statix property
    static public string $name = "MathHelper";

    //? static function
    static public function sum(...$numbers): int
    {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
}
