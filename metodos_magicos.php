 <?php
        
class Carro  {

    // Atributos

    public string $cor;
    public int $ano;
    public string $modelo;

    // Métodos

    public function __construct(string $cor, int $ano, string $modelo) {        // método de construção método mágico 'construct', reçebendo parâmetros '$cor', '$ano', '$modelo'
        $this-> cor = $cor;     // inserendido parâmetros do método contruct e inserindo nos atributos 
        $this-> ano = $ano;
        $this-> modelo = $modelo;
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
