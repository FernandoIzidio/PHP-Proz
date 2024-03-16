<?php
$json_path = "./database.json";
if (!empty($_POST)) {
    

    if (file_exists("$json_path") && filesize("$json_path") > 0) {
        $fd = fopen("$json_path", "r");
        
        $json_read = fread($fd, filesize("$json_path"));

        fclose($fd);
        
        $dados = json_decode($json_read, true);
    } else {
        $dados = array();
    }

    $dados[] = $_POST;

    $json_string = json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    $json_file = fopen($json_path, "w");

    fwrite($json_file, $json_string);

    fclose($json_file);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="/native/json.php" method="post">
        <label for="iname">Nome:</label>
        <input type="text" name="name" id="iname">

        <label for="isurname">Sobrenome</label>
        <input type="text" name="surname" id="isurname">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
