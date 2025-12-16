<?php
        
class Carro  {          // criando uma classe chamada 'Carro' utilizando a palavra reservada 'class'

    // Atributos

    public string $cor;         // atributos define as caracteristicas da classe
    public int $ano;        // atributo $ano tipado com 'int', que indica inteiro
    public string $modelo;
}

$carro1 = new Carro;         // instânciando classe 'Carro' na variável '$carro1' utilizando palavra chave 'new', tornando classe abstrata em um objeto carro
$carro1-> cor = 'Azul';     // passando 'propriedade' Azul para o objeto Carro
$carro1-> ano = 2025;
$carro1-> modelo = 'ABCD';

$carro2 = new Carro;        // criando 'carro2' utilizando classe Carro que se torna um modelo de classe
$carro2-> cor = 'Preto';
$carro2-> ano = 2024;
$carro2-> modelo =  'EFGH';

print_r($carro1);        // imprimindo variável 'carro1' que se tornou um objeto
print_r($carro2);