<?php
if($_POST){
    $button= $_POST['value'];
    switch($button){
        case 1:
            echo "1";
            break;
        case 2:
            echo "2";
            break;
        case 3:
            echo "3";
            break;
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
    <form action="ejercicio13.php" method="post">
        <button type="submit" name="value" value="1">1</button>
        <button type="submit" name="value" value="2">2</button>
        <button type="submit" name="value" value="3">3</button>
    </form>
</body>
</html>
