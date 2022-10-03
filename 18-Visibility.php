<?php

require_once "data/Product.php";

use Data\Dummy;
use Data\Product;

$product = new Product("Rokok", 20000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new Dummy("Surya", 2100);
$dummy->info();
