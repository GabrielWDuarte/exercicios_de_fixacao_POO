<?php

// interface de metodo de pagamento
interface MetodoPagamento {
    // metodo para processar o pagamento
    public function pagar($valor);
}

// classe que implementa o pagamento com cartao de credito
class CartaoCredito implements MetodoPagamento {
    public function pagar($valor) {
        echo "pagamento de r\${$valor} realizado com cartao de credito.\n";
    }
}

// classe que implementa o pagamento via paypal
class PayPal implements MetodoPagamento {
    public function pagar($valor) {
        echo "pagamento de r\${$valor} realizado via paypal.\n";
    }
}

// classe que implementa o pagamento por boleto
class Boleto implements MetodoPagamento {
    public function pagar($valor) {
        echo "pagamento de r\${$valor} realizado com boleto.\n";
    }
}

// classe que representa uma compra
class Compra {
    private $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    // metodo para realizar o pagamento utilizando o metodo de pagamento
    public function realizarPagamento(MetodoPagamento $metodo) {
        $metodo->pagar($this->valor);
    }
}

// testando o sistema de pagamentos

$compra = new Compra(150.00);

echo "teste com cartao de credito:\n";
$compra->realizarPagamento(new CartaoCredito());

echo "\nteste com paypal:\n";
$compra->realizarPagamento(new PayPal());

echo "\nteste com boleto:\n";
$compra->realizarPagamento(new Boleto());

?>
