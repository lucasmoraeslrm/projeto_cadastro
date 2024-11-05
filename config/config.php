<?php

require __DIR__ . '/../vendor/autoload.php';

function connectMongoDB() {
    $client = new MongoDB\Client("mongodb://localhost:27017");
    return $client->projetocadastroDB; // Nome do banco de dados
}
