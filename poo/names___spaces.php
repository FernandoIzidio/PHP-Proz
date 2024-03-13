<?php

/* NameSpace é um recurso util para quando se importa módulos de mesmo nome, ou módulos que tem classes de mesmo nome, e os namespaces são utilizados para evitar conflitos de nomes

Declaração namespaces:
    Deve ser feito na raiz do módulo, e deve ser a primeira instrução do módulo


    namespace Name; - Declara um namespace para funções e classes.

    Assim na hora de importar as classes e objetos desse módulo, não há ocorrência de conflitos por mesmo nome

    
    use Namespace- Altera o namespace do módulo atual

    PSRs(Php standard recomendations) - Recomenda que o namespace de um módulo, siga/reflita a hierarquia de diretório. Exemplo:

        src/
            ├── Namespace1/
            │    └── Classe1.php - O namespace desse módulo seria Namespace1
            └── Namespace2/
                └── subNameSpace/
                    └── Classe2.php - o Namespace desse módulo seria o Namespace2/subNameSpace

    
*/


require "./contract/product.php";
require "./models/product.php";
require "./heritage_polymorphism_abstraction.php";

use Nameheritage\Animal;


class Bear extends  Animal{

    public function make_noise($noise){
        return $noise;
    }


    public function get_speed(){
        return 60;
    }
};

use namespaceProduct\Product as npProduct;
use namespaceModels\Product as nmProduct;

$p1 = new npProduct(50, 40);

$p2 = new nmProduct(50, 40);



$p2->unique();

$p1->unique();


?>