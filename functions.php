<?php

function dd($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404) {
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

function routeToController($uri, $routes)
// Avec cette fonction on vérifie SI une clé de tableau correspondant à $uri existe dans le tableau $routes, auquel cas
// On require le string qui est correspond à la clé $uri dans le tableau $routes
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}