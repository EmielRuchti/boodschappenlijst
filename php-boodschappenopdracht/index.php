<?php
require "functions.php";
require "Database.php";
require "router.php";

routeToController(parse_url($_SERVER['REQUEST_URI'])['path'], $routes);