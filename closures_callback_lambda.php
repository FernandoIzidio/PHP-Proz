<?php 

// Closures são funções que adiam a execução de outras funções, ou funções que retornam funções

function mulitplier($func, $multiplier) {

    return function($a, $b) use ($func, $multiplier) {
        return $func($a, $b, $multiplier);
    };

};

$double = mulitplier(function($x, $y, $z){
    return $x * $y + $z;
}, 2);

?>


