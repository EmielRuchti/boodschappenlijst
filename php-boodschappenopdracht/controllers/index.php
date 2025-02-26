<?php

$credentials = require "config.php";

function sum($total, $item) {
    return $total += $item["price"] * $item["number"];
}

$database = new Database($credentials["database"]);
$query = "SELECT * FROM groceries";
$products = $database->query($query, [])->fetchAll();
$totalPrice = array_reduce($products, "sum", 0);

$subtotalPrice = [];
foreach ($products as $product) {
    array_push($subtotalPrice, ($product["price"] * $product["number"]));
}

require "views/index.view.php";
