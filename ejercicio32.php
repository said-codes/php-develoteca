<?php
$name="";
$language="";
$chkphp="";
$chkjava="";
$chkjavascript="";
$movie_list="";
$comment= "";

if($_POST){
    $name = (isset($_POST['name']) ? $_POST['name'] : null);
    $language = (isset($_POST['language']) ? $_POST['language'] : null);
    $chkphp = (isset($_POST['chkphp'])=="yes" ? "checked" : null);
    $chkjava = (isset($_POST['chkjava'])=="yes" ? "checked" : null);
    $chkjavascript = (isset($_POST['chkjavascript']) == "yes" ? "checked" : null);
    $movie_list = (isset($_POST['movie_list']) ? $_POST['movie_list'] : null);
    $comment = (isset($_POST['comment']) ? $_POST['comment'] : null);

    print_r($_POST);
    echo "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php if($_POST){ ?>
   <strong>Hello </strong>: <?php echo $name; ?>
   <br>
   <strong>You like </strong>: <?php echo $language; ?>
   <br>
   <strong>You are learning </strong>:
    <?php echo ($chkphp=="checked")?"php":""; ?>
    <?php echo ($chkjava=="checked")?"java":""; ?>
    <?php echo ($chkjavascript=="checked")?"javascript":""; ?>
    <br>
    <strong>The movie that you like : </strong> <?php echo $movie_list ?>
    <br>
    <strong>Comment:</strong>
    <?php echo $comment ?>
   <?php }?>
    <form action="ejercicio32.php" method="post">
        Name:
        <br>
        <br>
        <input type="text" name="name" id="name" value="<?php echo $name ?>">
        <br>
        <br>
        What do you like ?
        <br>
        <br>
        <input type="radio" <?php echo ($language=="php")?"checked":""; ?> name="language" value="php">Php
        <input type="radio"<?php echo ($language=="java")?"checked":""; ?> name="language" value="java">Java
        <input type="radio"<?php echo ($language=="javascript")?"checked":""; ?> name="language" value="javascript">JavaScript
        <br>
        <br>
        What are you learning ?
        <br>
        <br>
        <input type="checkbox" <?php echo $chkphp ?> name="chkphp" value="yes" id="">php
        <input type="checkbox" <?php echo $chkjava ?> name="chkjava" value="yes" id="">java
        <input type="checkbox" <?php echo $chkjavascript ?> name="chkjavascript" value="yes" id="">javascript
        <br>
        <br>
        What movie do you like ?
        <br>
        <br>
        <select name="movie_list" id="">
            <option value="0">Select a movie</option>
            <option value="1" <?php echo ($movie_list==1)?"selected": ""; ?> >The Godfather</option>
            <option value="2"<?php echo ($movie_list==2)?"selected": ""; ?> >The Shawshank Redemption</option>
            <option value="3"<?php echo ($movie_list==3)?"selected": ""; ?> >The Godfather: Part II</option>
            <option value="4"<?php echo ($movie_list==4)?"selected": ""; ?> >The Dark Knight</option>
            <option value="5"<?php echo ($movie_list==5)?"selected": ""; ?> >12 Angry Men</option>
            <option value="6"<?php echo ($movie_list==6)?"selected": ""; ?> >Schindler's List</option>
            <option value="7"<?php echo ($movie_list==7)?"selected": ""; ?> >Pulp Fiction</option>
            <option value="8"<?php echo ($movie_list==8)?"selected": ""; ?> >The Lord of the Rings: The Return of the King</option>
            <option value="9"<?php echo ($movie_list==9)?"selected": ""; ?> >The Good, the Bad and the Ugly</option>
            <option value="10"<?php echo ($movie_list==10)?"selected": ""; ?> >Fight Club</option>
            <option value="11"<?php echo ($movie_list==11)?"selected": ""; ?> >Forrest Gump</option>
            <option value="12"<?php echo ($movie_list==12)?"selected": ""; ?> >Inception</option>
            <option value="13"<?php echo ($movie_list==13)?"selected": ""; ?> >The Lord of the Rings: The Fellowship of the Ring</option>
            <option value="14"<?php echo ($movie_list==14)?"selected": ""; ?> >The Lord of the Rings: The Two Towers</option>
        </select>
        <br>
        <br>
        Do you have any question ?
        <br>
        <br>
        <textarea name="comment" id="" cols="30" rows="10">
            <?php echo $comment ?>
        </textarea>
        <br>
        <br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
