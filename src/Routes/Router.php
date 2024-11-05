<?php

namespace App\Routes;

use App\Controllers\ClienteController;

class Router {
    private $controller;

    public function __construct() {
        $this->controller = new ClienteController();
    }

    
    public function handleRequest() {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = $_SERVER['PATH_INFO'] ?? '/';
    
        header("Content-Type: application/json");
    
        switch ($method) {
            case 'POST':
                if ($path === '/clientes') {
                    $data = json_decode(file_get_contents('php://input'), true);
                    // Certifique-se de que apenas a resposta do controller é ecoada
                    echo $this->controller->create($data); 
                }
                break;
    
            case 'GET':
                if ($path === '/clientes') {
                    echo json_encode($this->controller->readAll());
                } elseif (preg_match('/\/clientes\/(.+)/', $path, $matches)) {
                    $id = $matches[1];
                    echo json_encode($this->controller->read($id));
                }
                break;
    
            case 'PUT':
                if (preg_match('/\/clientes\/(.+)/', $path, $matches)) {
                    $id = $matches[1];
                    $data = json_decode(file_get_contents('php://input'), true);
                    echo json_encode($this->controller->update($id, $data));
                }
                break;
    
            case 'DELETE':
                if (preg_match('/\/clientes\/(.+)/', $path, $matches)) {
                    $id = $matches[1];
                    echo json_encode($this->controller->delete($id));
                }
                break;
    
            default:
                http_response_code(404);
                echo json_encode(['error' => 'Endpoint não encontrado']);
        }
    }
    
    
}
