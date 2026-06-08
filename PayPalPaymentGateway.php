<?php

class PayPalPaymentGateway implements BankTransfer {
    public function transfer(float $amount): string {
        return "Processed PayPal payment of \${$amount}";
    }
}

?>