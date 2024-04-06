<?php
//sessions
session_start();

$_SESSION['user']="root";
$_SESSION['status']="logueado";

echo "Logged in";
echo "<br>";
echo "User: ".$_SESSION['user'];
echo "<br>";
echo "Status: ".$_SESSION['status'];
echo "<br>";

?>
