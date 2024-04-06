<?php
if($_POST){
    $name = $_POST['txt_name'];
    $lastname = $_POST['txt_lastname'];
    echo "Hola " . $name . " ". $lastname;
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
    <form action="ejercicio5.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" name="txt_name" id="name">
        <br>
        <label for="lastname">Lastname:</label>
        <input type="text" name="txt_lastname" id="lastname">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
