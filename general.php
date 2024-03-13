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

        $$name = value2; - Cria uma variavel de nome value com valor value2


        const variable = "foo"; Cria uma variavel de valor constante 
        
        

        $var1 = "value"

        $var2 = &$var1; - Var2 vai referenciar(apontar) pro valor de var1;




    Cada comando no php é seperado por ;



    Arrays indexaveis:

        $lista = array("word1", "word2", "word3");

        $lista = ["word1", "word2", "word3"];

    Arrays associatiavos:
        $dict =  array("name" => "Tulio", "idade" => 78)

        $dict = ["key" => "value"]


    Extruturas de repetição:
        
        for($i = 0 ;  $i < x; $i++){
        }


        foreach ($array as $item) {Usado para iterar sobre iterables
            echo $item;
        }

        switch ($variable){
            case 'value':
                do anything...
                break;

            case default:
                do anything...
                break;
        

        }


        while($idade < 18){
            do anything...
        }


        Bool or Get-Type functions:

            var_dump($variable) - Retorna informações sobre o tipo de uma variavel

            print_r()(print readable) - Renderiza uma variavel que não é renderizavel, por exemplo, um array, ou seja renderiza variaveis que não tem representação string implementadas


            isset($variable) - Retorna true se a variavel foi declarada, e é diferente de null

            gettype($name) - Retorna o tipo de nome

            is_string() - Verifica se a var é string

            is_int() - Verifica se é int

            is_array() - Verifica se é array

            is_float() - Verifica se é float

        Sintaxe:
            -> - Usado para executar/acessar metódos e atributos
            => - usado para atribuir valor a chaves em dicts

        use - Bult-in utilizado para manipular contexto e escopos exemplos de uso

        use($variable) - Importa a variavel de um escopo mais externo
        
     */

    $foo =  "name";
    $$foo = "Tulio";

    $nome = "fulano";
    $idade = 45;

    switch ($variable) {
        case 'value':
            # code...
            break;
        
        default:
            # code...
            break;
    }

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

    $i = 0;
 
?>