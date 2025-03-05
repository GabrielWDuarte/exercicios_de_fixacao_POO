<?php

class Retangulo {
    private $largura;
    private $altura;

    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->largura * $this->altura;
    }

    public function exibirArea() {
        echo "A área do retângulo é: " . $this->calcularArea();
    }
}

$retangulo = new Retangulo(10, 5);
$retangulo->exibirArea(); // saida: A area do retangulo é: 50
?>
