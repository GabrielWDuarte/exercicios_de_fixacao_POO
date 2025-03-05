<?php

// interface de relatorio
interface Relatorio {
    // metodo para gerar o relatorio com base nos dados fornecidos
    public function gerar(array $dados);
}

// classe que implementa o relatorio em pdf
class PdfRelatorio implements Relatorio {
    public function gerar(array $dados) {
        echo "gerando relatorio em pdf com os dados: " . implode(", ", $dados) . "\n";
    }
}

// classe que implementa o relatorio em excel
class ExcelRelatorio implements Relatorio {
    public function gerar(array $dados) {
        echo "gerando relatorio em excel com os dados: " . implode(", ", $dados) . "\n";
    }
}

// classe que implementa o relatorio em html
class HtmlRelatorio implements Relatorio {
    public function gerar(array $dados) {
        echo "gerando relatorio em html com os dados: " . implode(", ", $dados) . "\n";
    }
}

// classe que representa um gerente
class Gerente {
    // metodo para solicitar o relatorio usando a interface
    public function solicitarRelatorio(Relatorio $relatorio, array $dados) {
        $relatorio->gerar($dados);
    }
}

// testando o sistema de relatorios
$gerente = new Gerente();
$dados = ["vendas", "lucro", "clientes"];

echo "teste com pdf:\n";
$gerente->solicitarRelatorio(new PdfRelatorio(), $dados);

echo "\nteste com excel:\n";
$gerente->solicitarRelatorio(new ExcelRelatorio(), $dados);

echo "\nteste com html:\n";
$gerente->solicitarRelatorio(new HtmlRelatorio(), $dados);

?>
