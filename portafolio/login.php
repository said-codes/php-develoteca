<?php
session_start();
if($_POST){
    $user = $_POST['user'];
    $password = $_POST['password'];
    if($user == 'admin' && $password == 'admin'){
        //echo "Logged in, ok";
        $_SESSION['user'] = $user;
        //$_SESSION['password'] = $password;
        header("Location: index.php");
    }else{
        echo "<script>alert('User or password incorrect');</script>";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Login</h1>
                        </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputUser1" class="form-label">User</label>
                                <input type="text" class="form-control" id="user" name="user" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary">Enter portafolio</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted"></div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
