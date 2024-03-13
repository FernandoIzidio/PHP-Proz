<?php

//Getter metódo que se comporta como atributo, ou metódo que da acesso a um atributo

//Setter metódo que permite alterar o valor de um atributo getter/property

//private - Pŕotegido pela parent class

//protected - Protegido pelo escopo da familia da classe


//public - Disponivel em qualquer trecho



class Person{
    public $name; //Disponivel para as instâncias da classe
    
    protected $surname; // Atributo disponível apenas para o escopo da parent class, e das child class
    
    private $money; // Atributo de instância disponivel apenas para o escopo da parent class

    public $age;

    public $height;

    public static $random;
    


    public function __construct(string $name, string $surname, int $age, float $height) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->height = $height;
        
        self::$random = mt_rand(0, 100);
        echo self::$random;
        $this->money = 500 * self::$random;
        
    }

    //Getter
    public function money_remaining(){
        return $this->money;
    }


    public function spend_money(int $amount){
        $this->money = $this->money - $amount;
    }

    public function get_money(int $amount){
        $this->money = $this->money + $amount;
    }
}


$p1 = new Person("Truco", "Bené", 19, 1.62);

echo "<br>\n";
print_r($p1);
echo "<br>\n";
echo $p1->money_remaining();

$p1->spend_money(500);

echo "<br>\n";

echo $p1->money_remaining();

echo "<br>\n";

$p1->get_money(50);



echo $p1->money_remaining();


?>