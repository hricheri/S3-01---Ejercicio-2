<?php

require_once "BankTransfer.php";
require_once "PaymentProcessor.php";
require_once "PaypalPaymentGateway.php";
require_once "StripePaymentGateway.php";

$paypalGateway= new PayPalPaymentGateway();
$Processor1 = new PaymentProcessor($paypalGateway);

$stripeGateway = new StripePaymentGateway();
$Processor2 = new PaymentProcessor($stripeGateway);

echo $Processor1->processPayment(100);
echo $Processor2->processPayment(50);

?>