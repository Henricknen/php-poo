<?php

class Conta {       // classe de Conta bancaria

    // atributo
    private int $saldo;     // atributo definido com visibilidade 'private' que não permite alterações de fora da classee

    // métodos
    public function __construct(int $saldo) {       // método 'construct' define o saldo inicial da conta
        $this-> saldo = $saldo;
    }

    public function sacar(int $valor) {     // método com valor que será sacado
        echo "Você sacou: " . $valor. "<br>";
        $this-> saldo -= $valor;        // subtraindo o '$valor' que será sacado do saldo inicial
    }

    public function depositar(int $valor) {     // método que permite fazer depósito
        echo "Você depositou: ". $valor. "<br>";
        $this-> saldo += $valor;        // incrementando '$valor' no saldo
    }

    public function verSaldo() {        // função pública 'verSaldo' retorna o saldo 'private' interno de dentro da classe
        return $this-> saldo;
    }
}

$conta1 = new Conta(500);       // iniciando a conta com 500 reais
echo "Saldo Inicial: ". $conta1-> verSaldo(). "<br>";       // por a função 'verSaldo' ser pública é possível executa-lá de fora da classe sendo possível visualizar o saldo que está em atributo 'private'
$conta1-> depositar(100);       // depositando 100 reais
$conta1-> sacar(500);
echo "Saldo Atual: ". $conta1-> verSaldo(). "<br>";