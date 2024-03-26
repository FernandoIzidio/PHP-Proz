<?php

/*
O PHP por padrão trabalhar com duas rotas para formulário.

GET = Para receber dados do servidor
POST = Para enviar dados do servidor, que reflitam alterações no banco de dados

$_GET - Variavel armazena dados enviados via get.
$_POST - Variavel armazena dados enviados via post.

*/

$nome = @$_GET["nome"];
$idade =  @$_GET["idade"];
$compras = @$_GET["lista"];

echo $nome;
echo $idade;
print_r($compras)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="iname">Nome:</label>
        <input type="text" name="nome" id="iname">

        <label for="isurname">Sobrenome</label>
        <input type="text" name="idade" id="isurname">

        <div>
            <label for="isurname">Maça</label>
            <input type="checkbox" name="lista[]" id="isurname" value="Maçã">

            <label for="isurname">Banana</label>
            <input type="checkbox" name="lista[]" id="isurname" value="Banana">
            
            <label for="isurname">Uva</label>
            <input type="checkbox" name="lista[]" id="isurname" value="Uva">
        </div>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>