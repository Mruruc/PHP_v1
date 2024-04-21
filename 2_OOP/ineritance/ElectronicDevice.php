<?php
    abstract class ElectronicDevice{
        protected $IME;
        protected $price;

        public function __construct($IME,$price){
            $this->IME=$IME;
            $this->price=$price;
        }

        public function getIME(){
            return $this->IME;
        }

        public function setPrice($newPrice){
            $this->price=$newPrice;
        }

        abstract function getPrice();
    }
?>