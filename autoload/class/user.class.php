<?php

class User {

    use Logger;     // definindo que a classe User está utilizando a 'trait' Logger
    
    public function createUser() {      // função 'createUser' cria um usuariao
        echo "Usuario criado....";
        $this-> log("Usuario criado...");
    }

    public function loginUser() {       // função 'loginUser' executa o login do usuario
        echo "Usuario logado";
        $this-> log("Usuario logado...");
    }
}