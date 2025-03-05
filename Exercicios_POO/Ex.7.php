<?php

// interface de notificacao
interface Notificacao {
    // metodo para enviar notificacao
    public function enviar($mensagem);
}

// classe que implementa o envio por email
class EmailNotificacao implements Notificacao {
    public function enviar($mensagem) {
        echo "enviando email: {$mensagem}\n";
    }
}

// classe que implementa o envio por sms
class SmsNotificacao implements Notificacao {
    public function enviar($mensagem) {
        echo "enviando sms: {$mensagem}\n";
    }
}

// classe que implementa o envio por push notification
class PushNotificacao implements Notificacao {
    public function enviar($mensagem) {
        echo "enviando push notification: {$mensagem}\n";
    }
}

// classe que representa um usuario
class Usuario {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    // metodo para receber notificacao usando a interface
    public function receberNotificacao(Notificacao $notificacao, $mensagem) {
        echo "usuario {$this->nome} recebeu a seguinte notificacao:\n";
        $notificacao->enviar($mensagem);
    }
}

// teste do sistema de notificacoes
$usuario = new Usuario("joao");

$usuario->receberNotificacao(new EmailNotificacao(), "seu pedido foi enviado");
$usuario->receberNotificacao(new SmsNotificacao(), "seu pedido esta a caminho");
$usuario->receberNotificacao(new PushNotificacao(), "seu pedido chegou ao destino");

?>
