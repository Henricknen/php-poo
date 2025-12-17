 <?php
        
class Carro  {

    // Atributos

    // Métodos

    public function __construct(public string $cor, public int $ano, public string $modelo) {        // método de construção método mágico 'construct', reçebendo parâmetros '$cor', '$ano', '$modelo'
        
        echo 'Contruindo carro'. $this-> modelo. '...<br>';     // imprimindo modelo do carro
    }

    public function acelerar() {
        echo 'Acelerando...';
    }
    
    public function freiar() {
        echo 'Freiando...';
    }
}

$carro1 = new Carro('Azul', 2025, 'Gol');      // instanciando (criando) carro1 e passando os atributos
$carro2 = new Carro('Preto', 2030, 'Golf');     // criando carro2
