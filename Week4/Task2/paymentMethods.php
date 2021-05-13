<?php

    abstract class PaymentMethod {
        private String $name;
        private string $method;
        private int | float $price;
        private int $quantity;
        private int | float $totalPrice;

        abstract public function getTotalPrice();
        abstract public function getMethod();
    }

    class ABA extends PaymentMethod {
        public function __construct($name, $price, $quantity) {
            $this->name = $name;
            $this->price = $price;
            $this->quantity = $quantity;
            $this->method = "ABA";
            $this->totalPrice = $price * $quantity;
        }

        public function getMethod() {
            return $this->method;
        }

        public function getTotalPrice() {
            return $this->totalPrice;
        }
    };

    class PiPay extends PaymentMethod {
        public function __construct($name, $price, $quantity) {
            $this->name = $name;
            $this->price = $price;
            $this->quantity = $quantity;
            $this->method = "PiPay";
            $this->totalPrice = $price * $quantity;
        }

        public function getMethod() {
            return $this->method;
        }

        public function getTotalPrice() {
            return $this->totalPrice;
        }
    };

    class Wing extends PaymentMethod {
        public function __construct($name, $price, $quantity) {
            $this->name = $name;
            $this->price = $price;
            $this->quantity = $quantity;
            $this->method = "Wing";
            $this->totalPrice = $price * $quantity;
        }

        public function getMethod() {
            return $this->method;
        }

        public function getTotalPrice() {
            return $this->totalPrice;
        }
    };


?>