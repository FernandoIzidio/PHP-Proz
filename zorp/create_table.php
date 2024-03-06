<?php
require "./config_db.php";

$sql = "CREATE TABLE IF NOT EXISTS task_list (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  descricao TEXT NOT NULL
)";

$sql = $pdo->prepare($sql);
$sql->execute();

?>