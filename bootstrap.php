<?php

require_once "vendor/autoload.php";

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$paths = array(__DIR__ . "/src");

$conn = array(
    'driver' => 'pdo_mysql',
    'host' => '127.0.0.1',
    'user' => 'root',
    'password' => '',
    'dbname' => 'blogtest'
);

$config = ORMSetup::createAttributeMetadataConfiguration($paths, $isDevMode);
$connection = DriverManager::getConnection($conn, $config);
$entityManager = new EntityManager($connection, $config);

// Returns the EntityManager instance
function GetEntityManager()
{
    global $entityManager;
    return $entityManager;
}

// Register the console commands
$commands = [
    // If you want to add your own custom console commands,
    // you can do so here.
];
// ConsoleRunner::addCommands($commands);

// // Run the console commands
// $helperSet = ConsoleRunner::createHelperSet($entityManager);
ConsoleRunner::run(
    new SingleManagerProvider($entityManager),
    $commands
);
$entityManagerProvider = new SingleManagerProvider($entityManager);
$cli = ConsoleRunner::createApplication($helperSet, [$entityManagerProvider]);
$cli->run();
