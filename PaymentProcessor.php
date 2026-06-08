<?php

class PaymentProcessor {
    private BankTransfer $bankTransfer;

    public function __construct(BankTransfer $bankTransfer) {
        $this->bankTransfer = $bankTransfer;
    }

    public function processPayment(float $amount): string {
        return $this->bankTransfer->transfer($amount);
    }
}

?>