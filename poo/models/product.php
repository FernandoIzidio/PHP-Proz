<?php
namespace models;

class Product {
    public $amount;
    public $price;
    
    public function __construct($amount, $price) {
        $this->amount = $amount;
        $this->price = $price;
    }


    public function unique(){
        echo "Say hello from namespace models";
    }

}




?>