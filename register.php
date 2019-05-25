<?php 
require_once 'inc/dbh.php';

if (isset($_POST['submit'])) {
    $first_name = filter(trim($_POST['first_name']));
    $last_name = filter(trim($_POST['last_name']));
    $user_name = filter(trim($_POST['user_name']));
    $password = password_hash(filter($_POST['password']), PASSWORD_BCRYPT);

    $query = "INSERT INTO `users`(`first_name`, `last_name`, `user_name`, `password`) VALUES('$first_name', '$last_name', '$user_name', '$password')";
    $result = @mysqli_query($con, $query);
    if ($result) {
        header('Location: ' . URL_ROOT . 'login.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Register</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div class="container login-container">
            <div class="row">
                <div class="col-md-4 m-auto login-form">
                    <h3 class="text-center text-white mb-4">Registration Form</h3>
                    <form action="register.php" method="POST" autocomplete="false">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First name" name="first_name" minlength="3" autofocus required />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last name" name="last_name" minlength="3" required />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="user_name" minlength="8" required />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" minlength="8" required />
                        </div>
                        <div class="form-group mt-4">
                            <input type="submit" class="btn btn-primary btn-login" name="submit" value="Register" />
                            <a href="login.php">
                                <button type="button" class="btn btn-success btn-register float-right">Wanna login?</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <link rel="stylesheet" href="js/bootstrap.min.js">
    </body>
</html>