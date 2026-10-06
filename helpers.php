<?php

function dump(...$values)
{
    echo '<pre>';
    var_dump(...$values);
    echo '</pre>';
}

function dd(...$values) {
    dump(...$values);
    die;
}

function view($viewName, $variables=[]) {
    extract($variables);
    include __DIR__ . "/views/$viewName.php";
}

function redirect($path) {
    header("Location: $path");
}