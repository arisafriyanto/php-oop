<?php

require_once "data/Programmer.php";

$company = new Company;
$company->programmer = new Programmer("Aris");
var_dump($company);

$company->programmer = new BackEndProgrammer("Aris Afriyanto");
var_dump($company);

$company->programmer = new FrontEndProgrammer("Dimas");
var_dump($company);
