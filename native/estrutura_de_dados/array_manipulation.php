<?php



/*
Caracteristicas 
    - Current_Element - Todo array tem um ponteiro interno(atributo) que aponta para o primeiro elemento do array
    
    - um array no PHP pode se comportar como um iterator
    
    
Bool return:
    array_is_list($array) - Verifica se o array é uma lista

    in_array($needle, $array):bool - Vefifica se a agulha está no array

    array_key_exists($key, $array) -> Verifica se a chave existe no dicionário

    empty($array) - Retorna true se o array estiver vazio

    isset($array) - Retona true se a variavel estiver definida e não for null


List Comprehension:

    array_filter(array $array, ?callable $callback = null, [Array_Filter_Use_Key, *Use_Both]$mode) - Usado para filtrar elementos de uma array, callback deve retornar true, para os elementos que devem originar o novo array, e mode defini quais argumetnos serão passados para o callback durante cada iteração

        ARRAY_FILTER_USE_KEYS - Passa só as chaves para o callback invés dos valores.

        ARRAY_FILTER_USE_BOTH - Passa tanto o valor, quando o indice do valor para o callback


    array_map(callable $callback, array $array, array $array_args)

    é recomendado que array_args tenha o mesmo comprimento que o $array, pois cada elemento de $array, vai pegar um argumento diferente de $array_args

Arrays Constantes:
    
    $array_change_key_case($array, $case):
        CASE_UPER - Transforma as keys de um array em maiusculas
        CASE_LOWER - Transformas as keys de uma array em minusculas

    
    




Modify Original:

    array_push(array, ...values) - Adiciona items a um array

    array_pop($array) - Remove o ultimo elemento de um array

    array_shift($array) - Remove o primeiro elemento de um array

    array_unshit($array, $values) -> Adiciona um ou mais elementos no inicio de um array


    sort($array) - Ordena um array númerico em ordem crescente

    next($array) - muda o current_element para o proximo elemento

        

    rsort($array) - Ordena um array, em ordem reversa

    asort($array) - Ordena um dicionário, em ordem crescente, e mantém as chaves do dicionário

    schuffle($array) - Embaralha o array original


Copy original:

    array_walk_recursive($array, $callback, $arg) - Itera recursivamente sobre todos elementos de uma array

    array_rand($array, int $quantity )- Gera um novo array, selecionando valores aleatórios a partir das chaves/indices do $array informado, $quantity defini número de elementos aleatórios selecionados

    array_merge($array1, array $other_arrays):array - Mescla dois arrays, se as chaves de dois ou mais arrays forem iguais, o ultimo valor para a chave sobreescreve todos, o mesmo vale pare array indexavel, ou nomeado

    array_slice($array, $start, $lenght):array - Retorna uma nova fatia de $array, pegando os elementos a partir do indice $start, e definindo o array com um comprimento  de $lenght
    
    array_splice($array, $start, int $trash_elements, mixed $replacement_elements=null) -  Remove quantidade de $trash_elments de um array, começando a partir de $start, e substitui por novos elementos do $replacement


    array_reverse($array) - Inverte a ordem de uma array

    array_search($needle, $array): $key - Verifica se $needle está dentro do array, e retorna  a chave associada ao valor encontrado 


    pos ou current($array) -> Retorna o current element de um array
    

    reset($array) - Volta o current element para o primeiro elemento do array

    array_change_key_case($array, $case) ->  Altera o case das chaves de uma array.


    array_chunk(array, lenght, bool preserve_keys) -> Agrupa itens de um array, em pedaços(arrays) menores, e gera um array de de pedaços(arrays) de acorda com o tamanho de cada pedaço(array) definido

    array_column(array, column, column_index=null) -> array - Util para acessar uma chave que é comum, em uma lista de dicionários. Tipo tentar acessar o chave name, de todos dicionarios de uma lista de dicionários, para pegar os nomes da lista de dicionários.



    array_combine(array $keys, array $values) - Cria um array, a partir de arrays de keys e values


    array_sum($array) -Soma valores númericos de um array

    array_count_values(array) -> array - Retorna um array onde as chaves são os valores unicos, e os valores de cada chave é o número de ocorrências  de cada chave(valor unico)

    count ou sizeof($array) -> Retorna o número de elementos de uma array

    array_unique($array) - Retorna um array de valores únicos

    array_diff_assoc(array, compare_arrays) -> array - Retorna um novo array, somente com as chaves que não estejam presentes nos arrays comparados, e valores que não estejam presentes no array comparado(independe da ordem)


    

    array_diff(array, ...compare_arrays) - Retorna uma array, apenas com valores que não estejam presentes no arrays comparados, a chaves de cada valor diferente são preservadas.(independe da ordem)


    array_diff_key(array, ...compare_arrays) -> array - Retorna uma array apenas com as chaves que não estejam presentes nos arrays comparados, os valores de cada chave são preservados

    array_diff_uassoc(array, ...compare_arrays, callback->int) - Retorna um array com as chaves e valores que não estejam presentes nos arrays comparados, de forma personalizada, a forma como as chaves serão comparadas sera definida de acordo com a funçãoi

    array_diff_ukey(array, ...compare_arrays, callback) - Cria um novo array, com as chaves que não estejam presentes nos arrays comparados, os valores de cada chave são preservados. A forma como cada chave é comparada é definido pelo callback


    array_fill_keys(array $keys, $pattern_value):array ->  Cria um array, a partir das chaves fornecidas, e todas chaves, tendo como valor o valor padrão $pattern_value para todas as chaves


    array_fill(int $start, int $count, int $value):array -> Cria um array de $value padrão  com $count(int) elementos, com o indice númerico começando a partir de $start, 


    array_flip($array) - Chaves passam a ser valores do dicionário, e valores passam a ser chaves de dicionário



    array_key_first - Retorna primeira chave de um dict

    array_key_last - Retorna ultima chave de um dicionário

    array_keys - Retorna todas as chaves de uma array

    array_values - Retorna um array com valores do array

    */




$sacola1 = array("1", "2", "3");


$sacola2 = ["1, 2", "afdasdf"];

print_r($sacola1);

print_r($sacola2);

$dict = array("name"=> "Tulio","surname"=> "pneu","idade"=> 20);

print_r($dict);

$dict2 = ["name"=> "Sergio","surname"=> "Chulapa","idade"=> 20];

print_r($dict2);




array_push($sacola1, "TRucoooo");

$sacola2[] = "TRUCOOOOOO";



print_r($sacola2);  

print_r($sacola1);


$dict["compras"] = [
    "Maça",
    "Pera",
    "Banana",
    "Uva"
];

$dict2["genero"] = "Masculino";

print_r($dict2);

print_r($dict);



print_r(array_count_values(array(1,1,1,1, 2, 55, 4,4)));

?>