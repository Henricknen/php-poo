<?php

interface MetodoPagamento {     // definindo uma 'interface' ultilizando a palavra chave interface
    public function pagar($valor);      // função publica 'pagar' que recebe um valor
}

class Paypal implements MetodoPagamento {      // classe 'Paypal' será o método de pagamento, ultilizando palavra reservada 'implements' para implementar a interface 'MetodoPagamento'
    public function pagar($valor) {     // função 'pagar' realiza o pagamento
        echo "Pagamento via Paypal no valor de R$: ". $valor;
        return true;
    }
}

class CrediCard implements MetodoPagamento {       // classe de pagamento 'CrediCard'
    public function pagar($valor) {
        echo "Pagamento via cartão de crédito no valor de R$: ". $valor. "<br>";
        return "Sucesso!!!";
    }
}

$pagamento = new Paypal();      // instaciando classe Paypal
if ($pagamento-> pagar(100) === true) {        // criando um condição que verifica se o pagamento foi realizado, dentro do parenteses da condição chamando o método 'pagar' passando um valor de 100
    echo "Aprovado...";
} else {
    echo "Rejeitado...";
}