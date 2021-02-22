<?php

include 'cfg.php';

try {

    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql = $pdo->prepare("SELECT * FROM ultimos ORDER BY id DESC LIMIT 5");
    $sql->execute();    
    
    foreach ($sql as $row)  {        
        echo $row['ul_n'] . "<br/>";

    }
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
