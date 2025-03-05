<?php

// classe que representa um retangulo
class Retangulo {
    private $largura;
    private $altura;

    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    // calcula a area do retangulo (largura * altura)
    public function calcularArea() {
        return $this->largura * $this->altura;
    }

    // calcula o perimetro do retangulo (2 * (largura + altura))
    public function calcularPerimetro() {
        return 2 * ($this->largura + $this->altura);
    }

    // exibe os detalhes do retangulo: largura, altura, area e perimetro
    public function exibirDetalhes() {
        $area = $this->calcularArea();
        $perimetro = $this->calcularPerimetro();
        echo "retangulo: largura = {$this->largura}, altura = {$this->altura}, area = {$area}, perimetro = {$perimetro}\n";
    }
}

// classe que representa um circulo
class Circulo {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    // calcula a area do circulo (pi * raio^2)
    public function calcularArea() {
        return pi() * pow($this->raio, 2);
    }

    // calcula o perimetro do circulo (2 * pi * raio)
    public function calcularPerimetro() {
        return 2 * pi() * $this->raio;
    }

    // exibe os detalhes do circulo: raio, area e perimetro
    public function exibirDetalhes() {
        $area = $this->calcularArea();
        $perimetro = $this->calcularPerimetro();
        echo "circulo: raio = {$this->raio}, area = " . number_format($area, 2) . ", perimetro = " . number_format($perimetro, 2) . "\n";
    }
}

// testando o sistema com um retangulo e um circulo
$retangulo = new Retangulo(10, 5);
$circulo = new Circulo(7);

echo "detalhes do retangulo:\n";
$retangulo->exibirDetalhes();

echo "\ndetalhes do circulo:\n";
$circulo->exibirDetalhes();

?>
