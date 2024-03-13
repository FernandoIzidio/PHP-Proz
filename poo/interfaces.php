<?php
//Classe de contrato, onde só é permitido metódos e atributos de assinatura

namespace Nameinterfaces;

interface Animal{

    public function get_power();

    public function to_rest();


}


interface Birds extends Animal {

    public function Fly();


}


interface Mammal extends Animal {
    public function run();

}


class Bears implements Mammal {
    public function run() {
        return mt_rand(40, 60);

    }

    public function to_rest() {
        return "Sleeping";
    }


    public function get_power(){
        return "Hunting meal";
    }

}



?>