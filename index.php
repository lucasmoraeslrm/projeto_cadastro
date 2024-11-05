<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


// Redireciona para o Swagger UI se a raiz do projeto for acessada
if ($_SERVER['REQUEST_URI'] === '/projetocadastro/' || $_SERVER['REQUEST_URI'] === '/projetocadastro') {
    header('Location: /projetocadastro/public/swagger-ui/index.html'); // Caminho absoluto
    exit();
}

require __DIR__ . '/vendor/autoload.php';

use App\Routes\Router;

$router = new Router();
$router->handleRequest();
