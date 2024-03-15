<?php
    /*



     Tipos de dados:
    
        string
        int
        float
        bool
        undefined
        NaN


    Casting:

        (string) $variable; - Converte para string
        (int) $variable;
        (bool) $variable;
        (float) $variable;
        
        (array) $variable; - Tenta converter variable para array
        (object) $variable; - Tenta converter para um objeto de metódos e atributos, funciona melhor com arrays





    Toda classe herda de stdClass.


    Intruções/clausulas:
        Cada comando/declaração no php é seperado por ;(Metódos não levam ;)

        use - Clausula usado para importar variaveis de escopo mais externo, ou usado para alterar namespace do módulo atual

        namespace Name; - Usado para declarar um namespace do módulo atual

        const variable = "value";- Usado para declarar constantes no php, não precisa de $, aceita apenas valores imutaveis, e que não alteram na execução
        
    Sintaxe e operadores:
        Operadores Aritméticos:
            + (adição)
            - (subtração)
            * (multiplicação)
            / (divisão)
            % (resto da divisão)    
            ** (exponenciação)
        
        Operadores de Atribuição:
            
            = (atribuição)
            += (adição e atribuição)
            -= (subtração e atribuição)
            *= (multiplicação e atribuição)
            /= (divisão e atribuição)
            %= (resto da divisão e atribuição)

        Operadores de Comparação (Relacionais):
            
            == (igual a)
            === (igual a, incluindo tipo)
            != ou <> (diferente de)
            !== (diferente de, incluindo tipo)
            < (menor que)
            > (maior que)
            <= (menor ou igual a)
            >= (maior ou igual a)


            obj <=> obj2 - Nav operator, se obj for maior que obj2 retorna 1, caso contrario -1, se forem iguais retorna 0, funciona como subtração, mas só retorna 3 valores
                    
        Operadores Lógicos:

            && ou and (E lógico)
            || ou or (OU lógico)
            ! ou not (NÃO lógico)

        Outros Operadores:
                
            . - Concatenação.

            $var++; - Incrementa +1 a variavel atual;

            $var--; - Subtrai 1 da variavel atual

            condition ? value_true : value_false - Operador ternário

            -> - Usado para executar/acessar metódos e atributos de instância

            => - usado para atribuir valor a chaves em dicts

            @ - Operador de supressão de erros

            :: - Acessa atributo/metódo estatico(de classe).

            ?? - Operador de coleascência, se o objeto retornar null, ou undefined, seta um valor padrão para a variavel 
    


   

    Declaração de variaveis:

        $name = value;

        $$name = value2; - Cria uma variavel de nome value com valor value2


        const variable = "foo"; Cria uma variavel de valor constante 
        
        $var1 = "value"

        $var2 = &$var1; - Var2 vai referenciar(apontar) pro valor de var1;




    Importação de Módulos:

        include "module2.php" - Tentar importar conteúdo de um módulo php, se não encontrar não gera erros, mas lança um aviso


        require "module.php" - Importa todo conteúdo de um módulo php, se não encontrar lança um erro


    Tratamento de erros:

        try{
            do anything...
        } catch (Exception as $e){
            echo $e;
        } 
    Lançando erros:
            throw Exception - Lança uma exceção

    Funções:

        function mult(int $x, int $y):int { - Função declarativa
            return $x * $y;
        };


        function(int $x, int $y):int { - Função anônima
            return $x * $y;
        }


        $apelido = "print_r";

        $apelido();
        

    Extruturas de dados:
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

 
    Native functions:   

        rand_mt(start, end) - Gera número aleatório
        rand(start, end) - Gera número aleatório

        sleep(int) - atrasa a execução do script do servidor, em int segundso


        
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