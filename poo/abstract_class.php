<?php 

/*
Classes abstratas - São classes que podem ter metódos de contrato/assinatura, e metódos concretos.

Classes abstratas são classes que não podem ser instaciadas diretamente, uma classe abstrata obriga a child class a implementar os metódos abstratos


Syntax:
    abstract class ClassName(

    )

*/


abstract class Account{
    public $number;
    public $agentId;

    public $bankName;

    public $currencySymbol;
    

    public function __construct(int $number, int $agentId, string $bankName, string $currencySymbol){


        $this->number = $number;
        $this->agentId = $agentId;
        $this->bankName = $bankName;
        $this->currencySymbol = $currencySymbol;




    }

    abstract static public function createSantader(int $number, int $agentId, string $currencySymbol);

}

class Currency extends Account{
    public function __construct(int $number, int $agentId, string $bankName, string $currencySymbol){
        parent::__construct($number, $agentId, $bankName, $currencySymbol);
    }

    public final static function createSantader(int $number, int $agentId, string $currencySymbol){
        return new Currency($number, $agentId, "Santander",  $currencySymbol);
    }
    // Esse metódo não pode ser sobreescrito, ou modificado nas child class
    
}

$p1 = Currency::createSantader(45615618567, 164, "BRL");

print_r($p1);

?>



