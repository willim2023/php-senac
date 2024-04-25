<?php 
class Cliente {
    // Atributos
    private $id;
    private $nome;
    private $cpf;

    // Método construtor
    public function __construct($nome, $cpf)
    {
        $this->id;
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function __toString() {
        return "Nome: $this->nome - CPF: $this->cpf";
    }
}

