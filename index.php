<?php

require_once "PaymentGatewayInterface.php";
require_once "BankTransfer.php";
require_once "PaymentProcessor.php";
require_once "PayPalPaymentGateway";
require_once "StripePaymentGateway.php";

$processor = new PaymentProcessor(new StripePaymentGateway());
echo $processor->procesarPago(100) . "\n";

$processor2 = new PaymentProcessor(new BankTransfer());
echo $processor2->procesarPago(50) . "\n";