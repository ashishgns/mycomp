<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);
// boot application from here
require_once 'bootstrap/bootstrap.php';

// $stmt = $conn->prepare('SELECT * FROM emp');
// $stmt->execute();
// $results = $stmt->fetchAll();
// echo '<pre>'; print_r($results);

use App\Greetings;
use App\Http\Welcome;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require_once 'route.php';
require_once 'about.php';
require_once 'home.php';
require_once 'contact.php';

$route = new Route();

$route->add('/', 'Home@index');
$route->add('/abouts', 'About@index');
$route->add('/contacts', 'Contact@index');

// echo '<pre>'; print_r($route);

$route->submit();

// $logger = new Logger('mycomp_log');
// $logger->pushHandler(new StreamHandler(__DIR__.'/app.log', Logger::DEBUG));
// $logger->info('This is a log! ^_^ ');
// $logger->warning('This is a log warning! ^_^ ');
// $logger->error('This is a log error! ^_^ ');

echo Welcome::sayHelloWorld();