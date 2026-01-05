<?php

interface MetodoPagamento {         // interface que define o contrato para métodos de pagamento
    public function pagar(float $valor): bool;          // método pagar recebe um valor float e retorna boolean
}

class Paypal implements MetodoPagamento {       // classe de pagamento via PayPal
    public function pagar(float $valor): bool {         // executa o pagamento via PayPal
        echo "Pagamento via PayPal no valor de R$: " . $valor . "<br>";         // exibe mensagem
        return true;        // retorna true indicando pagamento aprovado
    }
}

class CrediCard implements MetodoPagamento {        // classe de pagamento via cartão de crédito
    public function pagar(float $valor): bool {         // executa o pagamento via cartão de crédito
        echo "Pagamento via cartão de crédito no valor de R$: " . $valor . "<br>";      // exibe mensagem
        return true;        // retorna true indicando pagamento aprovado
    }
}

class Pix implements MetodoPagamento {      // classe de pagamento via Pix

    private function geraQrCode(float $valor): string {         // gera um QR Code para o pagamento Pix
        echo "Gerando QR Code para pagamento via Pix no valor de R$: " . $valor . "<br>";       // exibe mensagem
        return "QRCODE123";         // retorna o QR Code gerado
    }

    public function pagar(float $valor): bool {         // executa o pagamento via Pix
        $qrCode = $this->geraQrCode($valor);        // chama o método privado para gerar o QR Code
        echo "Pagamento via Pix no valor de R$: " . $valor . "<br>";        // exibe mensagem
        echo "QR Code: " . $qrCode . "<br>";        // exibe o QR Code
        return true;        // retorna true indicando pagamento aprovado
    }
}

$pagamento = new Pix();         // define o método de pagamento (Pix, Paypal ou CrediCard)

if ($pagamento->pagar(100) === true) {      // chama o método pagar passando o valor 100
    echo "Aprovado...";         // pagamento aprovado
} else {
    echo "Rejeitado...";            // pagamento recusado
}
