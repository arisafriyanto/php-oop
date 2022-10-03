<?php

require_once "data/Category.php";

$category = new Category;
$category->setName("Afriyan");
$category->setMarried(true);

echo "Name: {$category->getName()}" . PHP_EOL;
echo "Married: {$category->isMarried()}" . PHP_EOL;
