<?php

class TodoList {
    private $tarefas = [];

    public function adicionarTarefa($tarefa) {
        $this->tarefas[] = $tarefa;
        echo "Tarefa \"{$tarefa}\" adicionada.\n";
    }

    public function listarTarefas() {
        echo "Lista de Tarefas:\n";
        foreach ($this->tarefas as $index => $tarefa) {
            echo ($index + 1) . ". " . $tarefa . "\n";
        }
    }

    public function removerTarefa($index) {
        if ($index >= 0 && $index < count($this->tarefas)) {
            $tarefaRemovida = $this->tarefas[$index];
            array_splice($this->tarefas, $index, 1);
            echo "Tarefa \"{$tarefaRemovida}\" removida.\n";
        } else {
            echo "Índice inválido.\n";
        }
    }
}

// Exemplo de uso
$lista = new TodoList();
$lista->adicionarTarefa("Estudar TypeScript");
$lista->adicionarTarefa("Fazer exercícios de POO");
$lista->listarTarefas();
$lista->removerTarefa(0);
$lista->listarTarefas();
?>
