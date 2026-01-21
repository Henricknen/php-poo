<?php

class File {        // classe 'File' responsavel por fazer o upload de um arquivo

    use Logger;     // definindo que a classe File está utilizando a 'trait' Logger

    public function created() {
        echo "Arquivo criado...";
        $this-> log("Arquivo criado...");
    }

    public function deleted() {
        echo "Arquivo deletado";
        $this-> log("Arquivo deletado...");      
    }
}