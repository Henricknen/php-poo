<?php

class Calculadora {

    private const PI = 3.14;        // definindo 'constante' PI, 
    public const VERSION = '1.0.0';     // constante 'VERSION' define a versão da calculadora

    public static function areaCirculo(float $raio) {       // função estática, não pode ser identificada e não tem acesso aos dados da instância da calculadora
        return self::PI * $raio * $raio;    // calculo da área do circulo utilizando constante PI
    }
}

$area = Calculadora::areaCirculo(5);
echo Calculadora::VERSION;