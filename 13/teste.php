<?php

class Cliente {
    public $nome;
    public $cpf;

    public function __construct($nome, $cpf) {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }
}

class Conta {
    // Atributos
    public $cliente;
    public $numero;
    public $saldo;

    // Método para sacar
    public function __construct($cliente, $numero, $saldo) {
        $this->cliente = $cliente;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    public function sacar($valorSaque) {
        if ($this->saldo >= $valorSaque && $valorSaque > 0) {
            $this->saldo -= $valorSaque;
            return true;
        }

        return false;
    }


    public function depositar($valorDeposito) {
        if ($valorDeposito > 0) {
            $this->saldo += $valorDeposito;
            return true;
        }

        return false;
    }

    public function transferir($valorTransferencia, $contaDestino) {
        if ($this->sacar($valorTransferencia)) {
            $contaDestino->depositar($valorTransferencia);
            return true;
        }

        return false;
    }

    public function __toString() {
        return "Numero: $this->numero - Saldo: $this->saldo - Cliente: $this->cliente->nome";
    }
}

class ContaCorrente extends Conta {
    public $limiteChequeEspecial;

    public function __construct($cliente, $numero, $saldo, $limiteChequeEspecial) {
        parent::__construct($cliente, $numero, $saldo);
        $this->limiteChequeEspecial = $limiteChequeEspecial;
    }

    public function sacar($valorSaque) {
        $valorLimiteEspecial = $this->saldo + $this->limiteChequeEspecial;

        if ($valorSaque <= $valorLimiteEspecial) {
            return parent::sacar($valorSaque);
        }

        return false;
    }
}

class ContaPoupanca extends Conta {
    public $taxaRendimento;

    public function __construct($cliente, $numero, $saldo, $taxaRendimento) {
        parent::__construct($cliente, $numero, $saldo);
        $this->taxaRendimento = $taxaRendimento;
    }

    public function aplicarRendimento() {
        $this->saldo += $this->saldo * $this->taxaRendimento;
    }
}

$contas = [];
$clientes = [];

function cadastrarCliente($nome, $cpf) {
    $cliente = new Cliente($nome, $cpf);
    global $clientes;
    $clientes[] = $cliente;

    atualizarSeletorClientes();
    exibirClientes();
}

function exibirClientes() {
    global $clientes;

    echo "<ul>";
    foreach ($clientes as $cliente) {
        echo "<li>Nome: $cliente->nome - CPF: $cliente->cpf</li>";
    }
    echo "</ul>";
}

function atualizarSeletorClientes() {
    global $clientes;

    echo "<select id='cliente'>";
    foreach ($clientes as $cliente) {
        echo "<option value='$cliente->cpf'>$cliente->nome</option>";
    }
    echo "</select>";
}

function cadastrarConta($numero, $saldo, $tipoConta, $clienteSelecionado) {
    global $contas, $clientes;

    $cliente = null;
    foreach ($clientes as $c) {
        if ($c->cpf === $clienteSelecionado) {
            $cliente = $c;
            break;
        }
    }

    if ($cliente) {
        $conta = null;
        switch($tipoConta) {
            case "ContaCorrente":
                $conta = new ContaCorrente($cliente, $numero, $saldo, 100);
                break;
            case "ContaPoupanca":
                $conta = new ContaPoupanca($cliente, $numero, $saldo, 0.01);
                break;
            default:
                echo "Tipo selecionado inválido!";
                break;
        }

        $contas[] = $conta;
        exibirContas();
    }
}

function exibirContas() {
    global $contas;

    echo "<ul>";
    foreach ($contas as $conta) {
        echo "<li>" . $conta . "</li>";
    }
    echo "</ul>";
}

?>