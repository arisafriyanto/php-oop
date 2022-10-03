<?php

require_once "data/Person.php";

define("APPLICATION", "php oop");
const APPVERSION = "1.0.0"; // php 7.4

echo APPLICATION . PHP_EOL;
echo APPVERSION . PHP_EOL;
echo Person::AUTHOR . PHP_EOL; // akses constant
