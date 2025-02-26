<?php

require "./Validator.php";
$credentials = require "config.php";
$database = new Database($credentials["database"]);
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    #string validation
    $min = 1;
    $max = 20;
    if (!Validator::string($_POST['name'], $min, $max)) {
        $errors['name'] = "Een naam is verplicht en moet tussen {$min} en {$max} characters lang zijn.";
        
    }

    #number validation
    $min = 1;
    $max = 100;
    if (!Validator::integer($_POST['number'], $min, $max)) {
        $errors['number'] = "Een aantal is verplicht en moet tussen {$min} en {$max} liggen.";
    }

    #price validation
    $min = 1;
    $max = 100;
    if (!Validator::decimal($_POST['price'], $min, $max)) {
        $errors['price'] = "Een stukprijs is verplicht en moet tussen {$min} en {$max} liggen.";
    }

    if (empty($errors)) {
        $database->query('INSERT INTO groceries(name, number, price) VALUES(:name, :number, :price)',[
            'name' => $_POST['name'],
            'number' => $_POST['number'],
            'price' => $_POST['price']
        ]);
        header ('Location: /');
        exit;
    }
}

require "views/create.view.php";