<?php include 'header.php' ?>
<?php include 'connection.php' ?>
<?php

if ($_POST) {
    $obj_connection = new Connection();
    print_r($_POST);
    $name = $_POST['name'];
    $date = new DateTime();
    $image = $date->getTimestamp()."_". $_FILES['image']['name'];
    $description = $_POST['description'];
    $sql = "INSERT INTO `projects` (`id`, `name`, `image`, `description`) VALUES (NULL, '$name', '$image', '$description');";
    $result = $obj_connection->executeQuery($sql);
    $tmp_image = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_image, "images/$image");
    header("Location: portafolio.php");

}

if ($_GET) {
    $id = $_GET['borrar'];
    $obj_connection = new Connection();
    $image = $obj_connection->executeSelect("SELECT * FROM `projects` WHERE `id` = $id");
    unlink("images/".$image[0]['image']);
    $sql = "DELETE FROM `projects` WHERE `projects`.`id` = $id";
    $result = $obj_connection->executeQuery($sql);
    header("Location: portafolio.php");
}

$obj_connection = new Connection();
$sql = "SELECT * FROM `projects`";
$projects = $obj_connection->executeSelect($sql);

?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Datos del proyecto</h1>
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputName1" class="form-label">Nombre del proyecto: </label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputImaged1" class="form-label">Imagen: </label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;" required></textarea>
                                <label for="floatingTextarea">Comments</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save project</button>
                    </form>
                </div>
                <div class="card-footer text-muted"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container mt-4">
                <table class="table table-primary table-hover">
                    <thead>
                        <tr>
                            <th scope="col"># Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($projects as $project) { ?>
                            <tr>
                                <th scope="row"><?php echo $project['id'] ?></th>
                                <td><?php echo $project['name'] ?></td>
                                <td>
                                    <img width="100" src="images/<?php echo $project['image'] ?>" alt="">
                                </td>
                                <td><?php echo $project['description'] ?></td>
                                <td>
                                    <a class="btn btn-danger" href="?borrar=<?php echo $project['id']; ?>">eliminar</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
