<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/../vendor/autoload.php';

use App\Routes\Router;

$router = new Router();
$router->handleRequest(); // Esta linha deve chamar o roteador
