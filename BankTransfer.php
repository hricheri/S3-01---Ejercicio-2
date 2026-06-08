<?php

interface BankTransfer {
    public function transfer(float $amount): string;
}

?>