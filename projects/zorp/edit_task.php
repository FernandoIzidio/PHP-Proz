<?php 
    require "config_db.php";
    if ($_SERVER['REQUEST_METHOD'] == "GET"){
    $id = $_GET['id'];
 
   

    $sql = "SELECT tk.descricao FROM task_list as tk WHERE tk.id=:id;";

    
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":id", $id);
    $sql->execute();

    $description = $sql->fetchAll(PDO::FETCH_ASSOC);

    $desc_value = $description[0]["descricao"];
    } else {
        $id = $_POST["id"];
        $new_desc = $_POST["description"];

        $sql = "UPDATE task_list SET descricao=:ndesc WHERE id=:id";

        $sql = $pdo->prepare($sql);

        $sql->bindValue(":ndesc", $new_desc);
        $sql->bindvalue(":id", $id);
        $sql->execute();


        header("Location: to_do.php");
    } 
?>



<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>
  <link rel="stylesheet" href="./style.css">
  <script src="https://kit.fontawesome.com/561265e797.js" crossorigin="anonymous"></script>
</head>

<body>
  <main>
    <h1>TODO List</h1>


    <table>
      <thead>

        <tr>
          <th>ID</th>
          <th>Descrição</th>
          
        </tr>
      </thead>

      <tbody>
        
          <tr>
    <form method="post">
                <td><?=$id?></td>
                <td><input type="text" name="description" id="idescription" value="<?=$desc_value?>"></td>

            
          </tr>
       

      </tbody>

        
    </table>
    <input type="text" style="display:none;" name="id" value="<?=$id?>">
    <button type="submit" id="et_submit">Enviar</button>
    </form>

  </main>
</body>

</html>