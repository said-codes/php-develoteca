<?php

//arithmetic operators
if($_POST){
    $value_a = $_POST['value_a'];
    $value_b = $_POST['value_b'];
    $result = $value_a + $value_b;
    echo "El resultado de la suma es: $result";
    echo "<br>";
    $result = $value_a - $value_b;
    echo "El resultado de la resta es: $result";
    echo "<br>";
    $result = $value_a * $value_b;
    echo "El resultado de la multiplicación es: $result";
    echo "<br>";
    $result = $value_a / $value_b;
    echo "El resultado de la división es: $result";
    echo "<br>";
    $result = $value_a % $value_b;
    echo "El resultado del modulo es: $result";
    echo "<br>";

    if($value_a == $value_b){
        echo "Los valores son iguales";
        echo "<br>";
        if($value_a ==4){
            echo "El valor es igual a 4";
            echo "<br>";
        }
        if($value_a ==5){
            echo "El valor es igual a 5";
            echo "<br>";
        }
    }

    if($value_a == $value_b && $value_a==4){
        echo "Los valores son iguales";
        echo "<br>";
        echo "El valor es igual a 4";
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

<form action="ejercicio11.php" method="post">
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
