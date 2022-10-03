<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;
MathHelper::$name = "Aff";
echo MathHelper::$name . PHP_EOL;

echo MathHelper::sum(10, 10, 20, 30, 100);
