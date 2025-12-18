<?php

class Veiculo {     // classe 'pai'
    public $marca;
    public $modelo;    
    
    public function mover() {       // método 'mover' comum a yodod Veículos
        echo "Andando...<br>";
    }

    public function freiar() {    // método 'mover' comum a yodod Veículos criado separado pois pode se
        echo "Freiando...<br>";
    }
}

class Carro extends Veiculo {       // 'extends' permite que a classe Carro 'herde as propriedades' da classe Veiculo
    public $qntPortas;
    
    function __construct($marca, $modelo, $qntPortas) {        
        $this-> marca = $marca;
        $this-> modelo = $modelo;
        $this-> qntPortas = $qntPortas;
    }


    public function abrirPortas() {     // método específico da classe Carro
        echo "Abrindo as ". $this-> qntPortas. " portas...<br>";
    }
}

class Moto extends Veiculo {
    public $tipoGuidon;

    function __construct($marca, $modelo, $tipoGuidon) {
        $this-> marca = $marca;
        $this-> modelo = $modelo; 
        $this-> tipoGuidon = $tipoGuidon;
    }
        
    public function empinar() {         // método específico da classe Moto
        echo "Empinando a moto...<br>";
    }    
}
    
    
echo "Carro: <br>";
$carro = new Carro("Ford", "Mustang", 4);       // intanciando um objeto da classe 'Carro'
$carro-> mover();
$carro-> mover();
$carro-> freiar();
    // chamando método especificos da classe Moto
$carro-> abrirPortas();
echo "<br>";

echo "Moto: <br>";
$moto = new Moto("Honda", "CBR1000", "Esportivo");      // intanciando um objeto da classe 'Moto'
$moto-> mover();
$moto-> mover();
// chamando método especificos da classe Moto
$moto-> empinar();
$moto-> freiar();