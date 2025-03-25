<?php

require_once 'functions.php';

// On récupère en variable $uri l'adresse de la page actuelle avec $_SERVER['REQUEST_URI'], 
// en récupérant que le path via parse_url()['path']
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];

routeToController($uri, $routes);