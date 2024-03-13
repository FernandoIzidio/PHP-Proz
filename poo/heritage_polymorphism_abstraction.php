<?php
namespace Nameheritage;

// Herança - Uma child class herda os metódos e atributos de uma parent class

// Classes Abstratas - São classes que podem ter metódos abstratos de assinatura(devem ser implementado nas child class) e metódos concretos

// abstração - Definir a assinatura dos metódos e atributos na parent class, ou extrair os metódos e atributos mais importantes para uma classe.


//polomorfismo - Conceito onde duas child class que herdam de uma mesma parent class, tem metódos de mesma assinatura, mas que se comportam de maneiras diferentes




abstract class Animal{
    public $breed;
    public $is_vertebrate;

    public $is_autotrophies;

    public function __construct(string $breed, bool $is_vertebrate, bool $is_autotrophies){
        $this->breed = $breed;
        $this->is_vertebrate = $is_vertebrate;
        $this->is_autotrophies= $is_autotrophies;

    }


    public function get_meal(){
        if ($this->is_autotrophies){
            echo "generating organic matter";
        } else{
            echo "Hunting for organic matter";
        }  
    }

    abstract public function make_noise(string $noise);

    abstract public function get_speed();
}


class Mammal extends Animal{
    public function make_noise($noise){
        echo $noise;
    }

    public function get_speed(){
        return mt_rand(20, 80);
    }
}

class Birds extends Animal{
    public function make_noise($noise){
        return $noise . $noise;

    }

    public function get_speed(){
        return 50;
    }
}



$b1 = new Birds("Bird", false, false);

$b2 = new Mammal("Bear", false, false);


echo $b2->make_noise("HUF HUF");

echo $b1->make_noise("PIU PIU");


echo $b1->get_speed();
echo $b2->get_speed();



?>
