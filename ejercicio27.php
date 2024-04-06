<?php

$server = "localhost:3307"; // 127.0.0.1
$user = "root";
$password="";

try{
    $connection = new PDO("mysql:host=$server;dbname=album", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected";
    echo "<br>";

    //$sql ="INSERT INTO `photos` (`id`, `name`, `archive_path`) VALUES (NULL, 'aprendiendo php', 'photo_learning.jpg')";
    //$connection->exec($sql);
    //echo "New record created successfully";


}catch(PDOException $e){
    echo $e->getMessage();
}

?>
