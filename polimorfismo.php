<?php

class Animal {      // classe animal contém o método emitirsom que é uma característica comum de todos animais
    public function emitirsom() {
        return null;        // método por padrão retorna nulo
    }
}

class Cachorro extends Animal {     // classe Cachorro esteende 'extends' classe Animal
    public $nome = "Cachorro"; 
    public function emitirSom() {       // utilização do 'polimorfismo' para fazer a substituição deste método 'emitirSom'
        return "Au Au";     // e retornar 'Au Au'
    }
}

class Gato extends Animal {
    public $nome = "Gato";      // definição do nome do animal
    public function emitirSom() {
        return "Miau";      // após reescrever método 'emitirSom' a classe Gato retorna 'Miau'
    }
}

class Peixe extends Animal {        // classe Peixe não tem nenhum método, então 'não fará o polimorfismo'
    public $nome = "Peixe";
}

function fazerAnimalEmitirSom($animal) {        // função reçebe o animal como parâmetro
    echo "<br> O animal " .$animal->nome. " faz: " .$animal-> emitirSom(). "<br>";      // retornar o animal com o seu respectivo som
}

$cachorro = new Cachorro();       // instancaiando animais
$gato = new Gato();
$peixe = new Peixe();

$animais = array($cachorro, $gato, $peixe);     // array de animais

foreach($animais as $animal) {      // percorrendo o array de animais
    fazerAnimalEmitirSom($animal);      // chamando função 'fazerAnimalEmitirSom', que retorna os animais com seus sons específicos
}