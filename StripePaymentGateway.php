<?php

class StripePaymentGateway implements BankTransfer {
    public function transfer(float $amount): string {
        return "Processed Stripe payment of \${$amount}";
    }
}

?>