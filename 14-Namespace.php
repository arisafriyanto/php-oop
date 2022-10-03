<?php

//! namespace bisa untuk class, function, const

namespace { // global namespace default kode kita ada diglobal namespace

    require_once "data/Conflict.php";
    require_once "data/Helper.php";

    $conflict1 = new Data\One\Conflict;
    $conflict2 = new Data\Two\Conflict;

    echo Helper\APPLICATION . PHP_EOL;
    Helper\helpMe();
}
