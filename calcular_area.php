<?php

abstract class Forma {      // classe abstrata Forma
    abstract public function calcularArea();        // método abstrato
}

class Quadrado extends Forma {      // class Quadrado 'estende' a classe Forma
    public $lado;

    public function __construct($lado) {
        $this-> lado = $lado;
    }

    public function calcularArea() {        // método 'calcularArea' calcula a area do quadrado
        return $this-> lado * $this-> lado;
    }
}

class Retangulo extends Forma {
    public $base;
    public $altura;

    public function __construct($base, $altura) {
        $this-> base = $base;
        $this-> altura = $altura;
    }

    public function calcularArea() {
        return $this-> base * $this-> altura;
    }
}

class Triangulo extends Forma {
    public $base;
    public $altura;

    public function __construct($base, $altura) {
        $this-> base = $base;
        $this-> altura = $altura;
    }

    public function calcularArea() {
        return $this-> base * $this-> altura / 2;
    }
}

$quadrado = new Quadrado(10);       // instanciando quadrado
echo "A area do quadrado é: ". $quadrado-> calcularArea(). "<br>";

$retangulo = new Retangulo(10, 2);
echo "A area do retangulo é: ". $retangulo-> calcularArea(). "<br>";

$triangulo = new Triangulo(10, 2);
echo "A area do triangulo é: ". $triangulo-> calcularArea(). "<br>";