<?php
//recibir información del formulario
if($_POST){
    $name = $_POST['txt_name'];
    echo "Hola ".$name;
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
    <form action="ejercicio2.php" method="post">
        <input type="text" name="txt_name" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
