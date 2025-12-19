<?php

abstract class Animal {     // classe abstrata 'abstract', não pode ser instanciada diretamente

    abstract public function emitirSom();         // método 'abstract' sem corpo e exige que todas classes filhas implementa esse método

}

class Cachorro extends Animal {         // classe Carrocho 'extends' herda a classe Animal
    public $nome = "Cachorro";

    public function emitirSom() {
        return "Au Au";
    }
}

class Gato extends Animal {
    public $nome = "Gato";

    public function emitirSom() {
        return "Miau";
    }
}

class Peixe extends Animal {
    public $nome = "Peixe";

    public function emitirSom() {       // Peixe por não emitir som retorna 'null'
        return null;
    }
}

function fazerAnimalEmitirSom($animal) {
    echo "<br> O animal " . $animal->nome . " faz: " . $animal->emitirSom() . "<br>";
}

$cachorro = new Cachorro();     // intânciando os objetos
$gato = new Gato();
$peixe = new Peixe();

$animais = array($cachorro, $gato, $peixe);

foreach ($animais as $animal) {
    fazerAnimalEmitirSom($animal);
}
