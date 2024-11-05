<?php

namespace App\Models; // Adicione um ponto e vírgula aqui

use MongoDB\BSON\ObjectId; // Importação correta
// O uso da classe Cliente aqui está incorreto, você deve ter a definição da classe Cliente nesta mesma classe

class Cliente { // Altere de ClienteController para Cliente

    public $nome;
    public $cpf;
    public $telefone;
    public $email;
    public $dataCadastro;

    public function __construct($nome, $cpf, $telefone, $email, $dataCadastro = null) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->dataCadastro = $dataCadastro ?? date('Y-m-d H:i:s');
    }
}
