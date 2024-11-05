<?php

namespace App\Controllers;

require_once __DIR__ . '/../../config/config.php';

use MongoDB\BSON\ObjectId;
use App\Models\Cliente; 

class ClienteController {

    private $collection;

    public function __construct() {
        $this->collection = connectMongoDB()->clientes;
    }

    public function create($data) {
        $cliente = new Cliente($data['nome'], $data['cpf'], $data['telefone'], $data['email']);
        $result = $this->collection->insertOne((array)$cliente);
        
        return json_encode([
            'message' => 'Registro salvo com sucesso',
            'id' => (string) $result->getInsertedId()
        ]); 
    }
    
    

    public function readAll() {
        return $this->collection->find()->toArray();
    }

    public function read($id) {
        return $this->collection->findOne(['_id' => new ObjectId($id)]);
    }
    

    public function update($id, $data) {
        $this->collection->updateOne(
            ['_id' => new ObjectId($id)],
            ['$set' => $data]
        );
        return ['status' => 'Cliente atualizado com sucesso'];
    }

    public function delete($id) {
        $this->collection->deleteOne(['_id' => new ObjectId($id)]);
        return ['status' => 'Cliente excluído com sucesso'];
    }
}
