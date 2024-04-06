<?php

//arithmetic operators
if($_POST){
    $value_a = $_POST['value_a'];
    $value_b = $_POST['value_b'];

    if($value_a > $value_b){
        echo "El valor de a es mayor que el de b";
    }
    else if($value_a < $value_b){
        echo "El valor de b es mayor que el de a";
    }
    else{
        echo "Los valores son iguales";
    }

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

<form action="ejercicio9.php" method="post">
    <label for="value_a">Value a:</label>
    <input type="text" name="value_a" id="value_a">
    <br>
    <label for="value_b">Value b:</label>
    <input type="text" name="value_b" id="value_b">
    <br>
    <input type="submit" value="Enviar">
</form>

</body>
</html>
