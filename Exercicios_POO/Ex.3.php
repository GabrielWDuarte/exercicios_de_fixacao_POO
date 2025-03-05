<?php

// Classe que representa uma conta bancaria
class Conta {
    private $numero;
    private $saldo;

    public function __construct($numero, $saldoInicial) {
        $this->numero = $numero;
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
        return $this->saldo;
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getNumero() {
        return $this->numero;
    }
}

// Classe que gerencia as contas do banco
class Banco {
    private $contas = [];

    // Cria uma conta e armazena no array de contas
    public function criarConta($numero, $saldoInicial) {
        $conta = new Conta($numero, $saldoInicial);
        $this->contas[$numero] = $conta;
        echo "Conta {$numero} criada com saldo inicial de R$ {$saldoInicial}.\n";
    }

    // Realiza depósito na conta especificada
    public function depositar($numeroConta, $valor) {
        if (isset($this->contas[$numeroConta])) {
            $conta = $this->contas[$numeroConta];
            $novoSaldo = $conta->depositar($valor);
            echo "Depósito de R$ {$valor} realizado na conta {$numeroConta}. Novo saldo: R$ {$novoSaldo}.\n";
        } else {
            echo "Conta não encontrada.\n";
        }
    }

    // Realiza saque na conta especificada
    
    public function sacar($numeroConta, $valor) {
        if (isset($this->contas[$numeroConta])) {
            $conta = $this->contas[$numeroConta];
            if ($conta->sacar($valor)) {
                echo "Saque de R$ {$valor} realizado na conta {$numeroConta}. Novo saldo: R$ " . $conta->getSaldo() . ".\n";
            } else {
                echo "Saldo insuficiente.\n";
            }
        } else {
            echo "Conta não encontrada.\n";
        }
    }

    // Consulta e exibe o saldo da conta
    public function consultarSaldo($numeroConta) {
        if (isset($this->contas[$numeroConta])) {
            $conta = $this->contas[$numeroConta];
            echo "Saldo da conta {$numeroConta}: R$ " . $conta->getSaldo() . ".\n";
        } else {
            echo "Conta não encontrada.\n";
        }
    }
}

// Exemplo de uso do sistema bancario
$banco = new Banco();
$banco->criarConta(123, 1000);
$banco->depositar(123, 500);
$banco->sacar(123, 200);
$banco->consultarSaldo(123);
?>
