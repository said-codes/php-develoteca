<?php include 'header.php' ?>
<?php include 'connection.php'?>
<?php
$obj_connection = new Connection();
$projects = $obj_connection->executeSelect("SELECT * FROM projects");
?>
<div class="container">
    <h1 class="display-3">Bienvenid@s</h1>
    <p class="lead">Este es mi portafolio privado</p>
    <hr class="my-2">
    <p>Más Información</p>
</div>
<div class="container">
    <div class="card-group">
        <?php foreach ($projects as $project){ ?>
            <div class="card">
                <img style="height:200px;" src="images/<?php echo $project['image']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $project['name']; ?></h5>
                    <p class="card-text"><?php echo $project['description']; ?></p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include 'footer.php' ?>
