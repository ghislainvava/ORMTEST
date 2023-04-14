<?php

require_once 'bootstrap.php';

use App\Service\ProductService;

$productService = new ProductService(GetEntityManager());

$name = $argv[1];
$description = $argv[2];
$price = (float)$argv[3];

$product = $productService->createProduct($name, $description, $price);

echo "Created product with ID: " . $product->getId() . PHP_EOL;
