<?php

function hello(): void {
    var_dump('Hello');
}

var_dump(hello());
hello();
hello();

function helloName($name='Nameless', $age='unknown') {
    var_dump("Hello, $name! You are $age years old!");
}

helloName('Kaspar', 33);
helloName('Martin', 67);
helloName();

function square(int $a): int {
    if($a<0) {
        return 0;
    }
    return $a * $a;
}

$answer = square(2);
var_dump($answer);
var_dump(square(4));

function recursion($i) {
    if($i<10){
        var_dump($i);
        recursion($i+1);
    }
}

recursion(0);