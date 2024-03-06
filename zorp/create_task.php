<?php

if (!empty($_GET['task'])) {
  require "./config_db.php"; 
  $todoItem = $_GET['task'];


  $sql = "INSERT INTO task_list (descricao) VALUES (:descricao)";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(":descricao", $todoItem);
  $sql->execute();

  header("Location: to_do.php");
  
} else {
  header("Location: to_do.php");
}
