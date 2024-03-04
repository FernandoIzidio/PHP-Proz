<?php
    /*
    Tipos de dados:
    
        str
        int
        float
        bool
        undefined

    Declaração de variaveis:

        $name = value;

    Manipulação de strings:


    Cada comando no php é seperado por ;


    Arrays indexaveis:

        $lista = array("word1", "word2", "word3");

        $lista = ["word1", "word2", "word3"];

    Arrays associatiavos:
        $dict =  array("name" => "Tulio", "idade" => 78)

    Extruturas de repetição:
        
        for($i = 0 ;  $i < x; $i++){
        }


        foreach ($array as $item) {Usado para iterar sobre iterables
            echo $item;
        }


        while($idade < 18){
            do anything...
        }


        Bool or Get-Type functions:

            gettype($name) - Retorna o tipo de nome

            is_string() - Verifica se a var é string

            is_int() - Verifica se é int

            is_array() - Verifica se é array

            is_float() - Verifica se é float

        Sintaxe:
            -> - Usado para executar/acessar metódos e atributos
            => - usado para atribuir valor em dicts


     */

    $foo =  "name";
    $$foo = "Tulio";

    $nome = "fulano";
    $idade = 45;

    echo $idade . $nome;

    echo gettype($foo);

    echo $name;

    $sacola =  array("nome" => "Tulio", "idade" => 45);

    foreach ($sacola as $item){
        echo $item;
    }

    for($i = 0 ;  $i < 8; $i++){
        echo $i;
    }


?>