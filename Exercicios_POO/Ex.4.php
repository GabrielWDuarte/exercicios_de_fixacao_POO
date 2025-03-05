<?php

// Classe que representa uma tarefa pessoal
class Tarefa {
    private $descricao;
    private $concluida;

    public function __construct($descricao) {
        $this->descricao = $descricao;
        $this->concluida = false;
    }

    // Método para marcar a tarefa como concluída
    public function marcarComoConcluida() {
        $this->concluida = true;
    }

    // Método para exibir os detalhes da tarefa (descrição e status)
    public function exibirDetalhes() {
        $status = $this->concluida ? 'Concluída' : 'Pendente';
        echo "Tarefa: {$this->descricao} - Status: {$status}\n";
    }
}

// Classe que gerencia uma lista de tarefas pessoais
class GerenciadorTarefas {
    private $tarefas = [];

    // Adiciona uma nova tarefa à lista
    public function adicionarTarefa($descricao) {
        $tarefa = new Tarefa($descricao);
        $this->tarefas[] = $tarefa;
        echo "Tarefa adicionada: {$descricao}\n";
    }

    // Marca uma tarefa como concluída, usando o índice da tarefa na lista
    public function marcarTarefaComoConcluida($indice) {
        if (isset($this->tarefas[$indice])) {
            $this->tarefas[$indice]->marcarComoConcluida();
            echo "Tarefa no índice " . ($indice + 1) . " marcada como concluída.\n";
        } else {
            echo "Índice inválido: {$indice}\n";
        }
    }

    // Exibe todas as tarefas com seus respectivos status
    public function exibirTarefas() {
        echo "Lista de Tarefas:\n";
        foreach ($this->tarefas as $indice => $tarefa) {
            echo ($indice + 1) . ". ";
            $tarefa->exibirDetalhes();
        }
    }
}

// Teste do sistema de gerenciamento de tarefas pessoais

$gerenciador = new GerenciadorTarefas();

$gerenciador->adicionarTarefa("Comprar pão");
$gerenciador->adicionarTarefa("Estudar PHP");
$gerenciador->adicionarTarefa("Fazer exercício de POO");

// Marcando a segunda tarefa como concluída (índice 1)
$gerenciador->marcarTarefaComoConcluida(1);

// Exibindo a lista de tarefas
$gerenciador->exibirTarefas();

?>
