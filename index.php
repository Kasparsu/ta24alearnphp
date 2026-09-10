<?php

$test = function (){
    var_dump('Shh');
};

var_dump($test);

$test();
call_user_func($test);

$numbers = [1,2,3,4,5];

$squares = array_map(function ($n) {
    return $n*$n;
}, $numbers);
var_dump($squares);

$squares = array_map(fn ($n) => $n*$n, $numbers);
var_dump($squares);