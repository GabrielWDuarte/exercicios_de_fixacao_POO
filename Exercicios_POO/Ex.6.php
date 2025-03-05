<?php

// classe que representa um produto
class Produto {
    private $nome;
    private $preco;
    private $quantidadeEmEstoque;

    public function __construct($nome, $preco, $quantidadeEmEstoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidadeEmEstoque = $quantidadeEmEstoque;
    }

    // atualiza o preco do produto
    public function atualizarPreco($novoPreco) {
        $this->preco = $novoPreco;
    }

    // adiciona quantidade ao estoque
    public function adicionarEstoque($quantidade) {
        $this->quantidadeEmEstoque += $quantidade;
    }

    // remove quantidade do estoque (nao permite valores negativos)
    public function removerEstoque($quantidade) {
        if ($quantidade > $this->quantidadeEmEstoque) {
            echo "quantidade indisponivel para remocao\n";
        } else {
            $this->quantidadeEmEstoque -= $quantidade;
        }
    }

    // exibe os detalhes do produto: nome, preco e quantidade em estoque
    public function exibirDetalhes() {
        echo "produto: {$this->nome}, preco: {$this->preco}, quantidade em estoque: {$this->quantidadeEmEstoque}\n";
    }

    // retorna o nome do produto
    public function getNome() {
        return $this->nome;
    }
}

// classe que gerencia o cadastro de produtos
class CadastroProdutos {
    private $produtos = array();

    // adiciona um novo produto
    public function adicionarProduto($produto) {
        $this->produtos[] = $produto;
    }

    // atualiza o preco de um produto usando o nome do produto
    public function atualizarPrecoProduto($nome, $novoPreco) {
        foreach ($this->produtos as $produto) {
            if ($produto->getNome() === $nome) {
                $produto->atualizarPreco($novoPreco);
                echo "preco do produto {$nome} atualizado para {$novoPreco}\n";
                return;
            }
        }
        echo "produto {$nome} nao encontrado\n";
    }

    // exibe um relatorio de todos os produtos cadastrados
    public function exibirRelatorio() {
        echo "relatorio de produtos:\n";
        foreach ($this->produtos as $produto) {
            $produto->exibirDetalhes();
        }
    }
}

// testando o sistema de cadastro de produtos

$cadastro = new CadastroProdutos();

// cadastrando produtos
$produto1 = new Produto("notebook", 3500.00, 10);
$produto2 = new Produto("smartphone", 2000.00, 20);
$produto3 = new Produto("tablet", 1500.00, 15);

$cadastro->adicionarProduto($produto1);
$cadastro->adicionarProduto($produto2);
$cadastro->adicionarProduto($produto3);

// atualizando o preco de um produto
$cadastro->atualizarPrecoProduto("smartphone", 2100.00);

// exibindo o relatorio de produtos
$cadastro->exibirRelatorio();

?>
