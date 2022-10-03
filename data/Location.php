<?php

//! Abstract class, class tidak bisa dibuat object secara langsung hanya bisa diturunkan
//! Abstract class dibuat sebagai kontrak atau ketentuan untuk childnya

namespace Data;

abstract class Location
{
    public string $name;
}

class City extends Location
{
}

class Province extends Location
{
}

class Country extends Location
{
}
