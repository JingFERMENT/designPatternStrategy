<?php

class paymentContext {
    private $paymentStrategy;

    public function setPaymentStrategy (PaymentStrategy $strategy) {
        $this->paymentStrategy = $strategy;
    }

    public function pay(float $amount) {
        $this->paymentStrategy->pay($amount);
    }

}