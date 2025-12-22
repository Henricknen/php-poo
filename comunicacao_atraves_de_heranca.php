<?php

abstract class Animal {     // classe abstrata serve como modelo para todos os animais
    abstract public function emitirSom();       // método abstrato obriga as classes filhas a implementarem este método
}

class Cachorro extends Animal {     // classe cachorro herda da classe abstrata animal
    public $nome = "Cachorro";          // propriedade 'nome'

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function emitirSom() {       // implementando método abstrato 'emitirSom'
        return "Au Au";
    }
}

class FilaBrasileiro extends Cachorro {     // estendendo a classe Cachorro
    public $nome = "Fila Brasileiro";
    public $meses = 3;

    public function __construct($nome) {
        parent::__construct($nome);
    }

    public function emitirSom() {       // 'sobrescrita' do método emitirSom

        if($this-> meses > 6) {     // condição para emitir som especifico
            return "Ruf Ruf";
        } else {
            return parent::emitirSom();     // 'parent' permite ter acesso de classe especifica da classe pai
        }
        
    }
}

function fazerAnimalEmitirSom($animal) {        // função recebe qualquer objeto Animal
    echo "<br> O animal " . $animal->nome . " faz: " . $animal->emitirSom() . "<br>";
}

$fila = new FilaBrasileiro("Dog");      // 'instanciando' um objeto da classe FilaBrasileiro
fazerAnimalEmitirSom($fila);