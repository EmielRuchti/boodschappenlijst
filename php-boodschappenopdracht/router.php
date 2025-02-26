<?php

$routes = require "routes.php";

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort() {
    require "views/404.php";
    die();
}