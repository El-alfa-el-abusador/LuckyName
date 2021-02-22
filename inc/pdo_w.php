<?php

include 'cfg.php';

$nombre = $_POST['nombre'];

try {
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $sql = $pdo->prepare("INSERT INTO ultimos(ul_n) VALUES (?)");
  $sql->bindParam(1, $nombre);
  $sql->execute();

  $resultado = $sql->fetchObject();
  echo $resultado->Descripcion;
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
