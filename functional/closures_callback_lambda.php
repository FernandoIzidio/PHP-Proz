<?php 

// Closures são funções que adiam a execução de outras funções, ou funções que retornam funções



// call_user_func ou call_user_func_array - permite chamar funções por meio de string(nomes da função)

function mulitplier($func, $multiplier) {

    return function($a, $b) use ($func, $multiplier) {
        return $func($a, $b, $multiplier);
    };

};

$double = mulitplier(function($x, $y, $z){
    return $x * $y * $z;
}, 2);

// Funções anônimas no php

$mult = function($w, $z)  {
    return $w * $z;
};

// Callback - Função que recebe função como argumento

function Call(callable $func, string $args) {
    return $func($args);
};


//decorators funções ou classes que modificam ou substituem outras funções ou classes


function try_do_this(callable $func, ...$args) {
    
    return function (...$newargs)  use ($func, $args){

    try {   
        $retorno = $func(...$newargs, ...$args);
        return $retorno;
    } catch (Exception $e) {
        echo $e;
    };

    };
};

$double_try = try_do_this(function($x, $y) {return $x * $y;}, 2);


echo $double_try(4);


function get_closure(callable $closure, mixed ...$fixe_args) {

    
    return function (...$newargs) use ($closure, $fixe_args) {
        return $closure(...$newargs, ...$fixe_args);
    };
}

?>
