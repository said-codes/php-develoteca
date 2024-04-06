<?php

$archive = $_FILES['archive'];

if($_POST){
    print_r($_FILES['archive']);
    echo "<br>";
    print_r($_FILES['archive']['tmp_name']);
    echo "<br>";
    print_r($_FILES['archive']['name']);
    //move_uploaded_file($_FILES['archive']['tmp_name'],$_FILES['archive']['name']);
}else{
    echo "Did not select any images";
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
    <form action="ejercicio33.php" enctype="multipart/form-data" method="post">
        Image:
        <input type="file" name="archive" id="">
        <br>
        <input type="submit" name="send" value="Submit">
    </form>
</body>
</html>
