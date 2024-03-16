<?php

//Filtrando valores
$products = array(
    array(
    "nome"=> "Maçã",
    "preço"=>  20
    ),
    array(
        "nome"=> "Bala",
        "preço"=>  8.5
    ),
    array(
        "nome"=> "Pneu",
        "preço"=>  78
    ),

    array(
        "nome"=> "Truco",
        "preço"=>  45
        )

);



$new_products = array_filter($products, function($product, $indice) {
    return $product["preço"] > 18;
}, ARRAY_FILTER_USE_BOTH);


// print_r($new_products);
echo "\n\n\n\n";



function apply_disccount($product, $quantity = 10){
    
    $product["preço"] = $product["preço"] - ( $product["preço"] * ($quantity / 100));

    return $product;
}   


print_r(array_map('apply_disccount', $products, [20,  10, 30, 50]));


?>