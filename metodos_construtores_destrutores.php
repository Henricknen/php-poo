<?php

class Conexao { 
   
    private string $conexao;        // atributo responsável por armazenar a conexão com o banco de dados
    
    public function __construct() {     // método construtor. é executado automaticamente quando o objeto é instanciado
                
        $this->conexao = "Conectado com o banco de dados";      // Simulando uma conexão com o banco de dados
        
        echo "Conexão com o banco de dados criada <br>";
    }
    
    public function __destruct() {          // método destrutor é executado quando o objeto é destruído ou quando o script termina
        $this-> conexao = "";
        echo "Conexão encerrada com o banco de dados <br>";
    }
    
    public function consulta() {        // método responsável por realizar uma consulta Só executa a consulta se a conexão estiver ativa
        
        if ($this->conexao) {
            echo "Realizada consulta no banco de dados <br>";
        } else {
            echo "Erro: conexão não ativa <br>";
        }
    }
}

$conexao = new Conexao();       // Instanciando o objeto, neste momento o método __construct() é executado automaticamente
$conexao->consulta();       // executa uma consulta após a conexão ter sido criada

unset($conexao);        // Destrói o objeto manualmente, neste momento o método __destruct() é chamado
echo "Encerrando script...";        // código executado após o encerramento da conexão