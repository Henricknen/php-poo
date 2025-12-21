<?php

abstract class Animal {
    abstract public function emitirSom();
}

class Cachorro extends Animal {
    public $nome = "Cachorro";

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function emitirSom() {
        return "Au Au";
    }
}

class FilaBrasileiro extends Cachorro {
    // public $nome = "Fila Brasileiro";
    public $meses = 3;

    public function emitirSom() {
        if($this-> meses > 6) {
            return "Ruf Ruf";
        } else {
            return parent::emitirSom();
        }
        
    }
}comunicacao_atraves_de_heranca.php

class Gato extends Animal {
    public $nome = "Gato";

    public function emitirSom() {
        return "Miau";
    }
}

class Peixe extends Animal {
    public $nome = "Peixe";

    public function emitirSom() {
        return null;
    }
}

function fazerAnimalEmitirSom($animal) {
    echo "<br> O animal " . $animal->nome . " faz: " . $animal->emitirSom() . "<br>";
}

$fila = new FilaBrasileiro("Dog");
fazerAnimalEmitirSom($fila);

?>
