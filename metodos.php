<?php
        
class Carro  {

    // Atributos

    public string $cor;
    public int $ano;
    public string $modelo;

    // Métodos

    public function acelerar() {        // método 'Acelerar' executa a função de acelerar o carro
        echo 'Acelerando...';
    }
    
    public function freiar() {        // método 'Freiar' executa a função de freiar o carrof
        echo 'Freiando...';
    }
}

$carro1 = new Carro;
$carro1-> cor = 'Azul';
$carro1-> ano = 2025;
$carro1-> modelo = 'ABCD';

$carro2 = new Carro;
$carro2-> cor = 'Preto';
$carro2-> ano = 2024;
$carro2-> modelo =  'EFGH';

echo "<br>Carro1: <br>";
$carro1-> acelerar();       // chamando método 'acelerar', o carro1 irá acelerar
$carro1-> freiar();

echo "<br>Carro2: <br>";
$carro2-> acelerar();       // chamando método 'acelerar', o carro2 irá acelerar
$carro2-> freiar();