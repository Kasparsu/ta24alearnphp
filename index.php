<?php
$test = array(1, 2, 3);
$test = [1, 2, 3];
$test = [1, 'asdas', true, [1, 2, 3]];
var_dump($test[3][1]);
$test = [
    1,
    'name' => 'Kaspar',
    'age' => 33,
    3,
    'aadsas',
    true,
    100 => 'lol',
    'troll',
];
var_dump($test['name']);
array_push($test, 'added', 'zxvxxzcv', 3);
$test[] = 'new value';
$test['name'] = 'Martin';
$test[1] = 99999;
unset($test[3]);
var_dump($test);