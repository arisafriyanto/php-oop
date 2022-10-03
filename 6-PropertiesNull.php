<?php

class Person
{
    var string $name;
    var ?string $address = null; // kasih ?
    // var string $address = null; 
    // ini error karena gk bisa null jika kita kasih type declaration dan bisa juga di function argument
    var string $country = "Indonesian";
}
