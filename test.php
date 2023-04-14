<?php

// use App\Entity\User;
// use App\Service\UserService;
// use Doctrine\ORM\EntityManagerInterface;
// use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

// require_once __DIR__ . '/vendor/autoload.php';

// // Instantiate the EntityManager and UserPasswordEncoderInterface dependencies
// // ...

// // Instantiate the UserService and call the createUser method
// $userService = new UserService($entityManager, $passwordEncoder);
// $user = $userService->createUser('test@example.com', 'testuser', 'testpassword');

// echo "User created with ID " . $user->getId() . PHP_EOL;



require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/bootstrap.php';

use App\Entity\Product;
use App\Service\ProductService;
use Doctrine\ORM\EntityManagerInterface;

$productService = new ProductService($entityManager);

// Instantiate the ProductService and call the createProduct method
$productService = new ProductService($entityManager);
$product = $productService->createProduct('Banane', 9.99);

echo "Product created with ID " . $product->getId() . PHP_EOL;
