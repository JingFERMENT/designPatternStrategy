<?php 
// different type of the payment strategies 

// credit card 
class CreditCardPayment implements PaymentStrategy {
    private $cardNumber;
    private $cvv;
    private $expiryDate;

    public function __construct($cardNumber, $cvv, $expiryDate) {
        $this->cardNumber = $cardNumber;
        $this->cvv = $cvv;
        $this->expiryDate = $expiryDate;
    }

    public function pay(float $amount) {
        echo "Paying $amount using Credit Card.\n";
    }
}

// paypal
class PayPalPayment implements PaymentStrategy {
    private $email;

    public function __construct($email) {
        $this->email = $email;
    }

    public function pay(float $amount) {
        echo "Paying $amount using PayPal.\n";
    }
}


// bitCoin
class BitcoinPayment implements PaymentStrategy {
    private $walletAddress;

    public function __construct($walletAddress) {
        $this->walletAddress = $walletAddress;
    }

    public function pay(float $amount) {
        echo "Paying $amount using Bitcoin.\n";
    }
}

