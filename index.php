<?php
// use Credit card to pay 
$paymentContext = new paymentContext();

$paymentContext->setPaymentStrategy(new CreditCardPayment("1234567890123456", "123", "12/25"));
$paymentContext->pay(100.0);

// use PayPal to pay 
$paymentContext->setPaymentStrategy(new PayPalPayment('user@example.com'));
$paymentContext->pay(150.0);

// use Bitcoin to pay 
$paymentContext->setPaymentStrategy(new BitcoinPayment('1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa'));
$paymentContext->pay(200.0);