<?php 
session_start();

require_once 'inc/dbh.php';

if (isset($_POST['submit'])) {
    $user_name = filter(trim($_POST['user_name']));
    $password = filter($_POST['password']);

    $result = mysqli_query($con, "SELECT * FROM `users` WHERE `user_name` = '$user_name'");
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        
        if (password_verify($password, $user['password'])) {
            $_SESSION['full_name'] = $user['first_name'] . ' ' . $user['last_name'];
            $_SESSION['login_status'] = true;
            header('Location: ' . URL_ROOT . 'index.php');
        } else {
            header('Location: ' . URL_ROOT . 'login.php?err=true');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div class="container login-container">
            <?php if (isset($_GET['err'])): ?>
                <div class="row">
                    <div class="col-md-5 m-auto text-center">
                        <div class="alert alert-danger">Incorrect Username or Password! Please try again!</div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-4 m-auto login-form">
                    <h3 class="text-center text-white mb-4">Login Form</h3>
                    <form action="login.php" method="POST" autocomplete="false">
                        <div class="form-group">
                            <input type="text" class="form-control" name="user_name" placeholder="Username" required autofocus />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required />
                        </div>
                        <div class="form-group mt-4">
                            <input type="submit" class="btn btn-primary btn-login" name="submit" value="Login" />
                            <a href="register.php">
                                <button type="button" class="btn btn-success btn-register float-right">Don't have account?</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <link rel="stylesheet" href="js/bootstrap.min.js">
    </body>
</html>