<?php

include 'cfg.php';

$nombre = $_POST['nombre'];

try {
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $sql = $pdo->prepare("SELECT Nombre, Descripcion FROM nombres WHERE Nombre = ?");
  $sql->bindParam(1, $nombre);
  $sql->execute();

  $resultado = $sql->fetchObject();
  if ($resultado != null) {
  echo $resultado->Descripcion;
  }

} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

?>