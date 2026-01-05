<?php

trait Logger {      // 'trait' Logger
    public function log($message) {     // função 'log' exibe menssagem de usuario criado
        echo "<br>[LOG]: ". $message. "<br>";
    }
}

class User {

    use Logger;     // definindo que a classe User está utilizando a 'trait' Logger
    
    public function createUser() {      // função 'createUser' cria um usuariao
        echo "Usuario criado....";
        $this->log("Usuario criado...");
    }

        public function loginUser() {       // função 'loginUser' executa o login do usuario
            echo "Usuario logado";
            $this-> log("Usuario logado...");
        }
}

class File {        // classe 'File' responsavel por fazer o upload de um arquivo

    use Logger;     // definindo que a classe File está utilizando a 'trait' Logger

    public function created() {
        echo "Arquivo criado...";
    }

    public function deleted() {
        echo "Arquivo deletado";
    }
}

$user = new User();
$user-> createUser();
$user-> loginUser();

echo "<hr>";
$file = new File();
$file-> created();
$fie-> deleted();