<?php

// Autoload files using the Composer autoloader.
require_once dirname(__DIR__) . '/vendor/autoload.php';

$config = new \Doctrine\DBAL\Configuration();
//..
$connectionParams = array(
    'dbname' => 'test',
    'user' => 'ashish',
    'password' => 'Ashish@123',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
