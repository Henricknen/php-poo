<?php

function meu_autoloader($className) {       // função 'meu_autoloader' recebe o nome de uma classe que será carregada, fazendo papel do 'require'
    $diretorios = ["classe/", "traits/"];       // definindo os diretórios que será carregado as classes

    foreach($diretorios as $diretorio) {        // percorrendo diretórios para verifica se existem
        if(file_exists($diretorio. $className. ".class.php")) {
            include_once($diretorio. $className. ".class.php");
            break;
        }
    }
    include_once("class/". strtolower($className). ".class.php");        // ultilizando include once em um arquivo que contém no nome '.class.php' da pasta class e ultilizando 'strlower' para converter os nomes das classes para minúsculo

    spl_autoload_register("meu_autoloader");        // função faz o registro no php para deixar o autoload 'inteligente'
}

meu_autoloader("User");
meu_autoloader("File");

echo "<hr>";
$user = new User();
$user-> createUser();
$user-> loginUser();

echo "<hr>";
$file = new File();
$file-> created();
$file-> deleted();