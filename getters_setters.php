<?php

class Produto {
    // atributos

    private string $nome;
    private float $preco;

    public function __construct(string $nome, float $preco) {
        $this-> nome = $nome;
        $this-> preco = $preco;
    }

    // getter = leitura
    public function getPreco() : float {        // métodoto acessa o preço
        if(is_float($this-> preco)) {       // regras de verificação do preço
            return $this-> preco;        
        } else {
            return 0.00;
        }
        return $this-> preco;
    }

    // setter
    public function setPreco(float $preco) {        // altera o preço
        $this-> preco = $preco;
    }
}

$produto1 = new Produto('Cadeira', 500.00);     // 'instanciando' produto1
var_dump($produto1-> getPreco());