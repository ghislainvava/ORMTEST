<?php

use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

require_once "bootstrap.php";
// return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
new SingleManagerProvider($entityManager);
