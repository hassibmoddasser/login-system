<?php 
include_once 'inc/head.php';
include_once 'inc/nav.php' 
?>

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center mt-3">
      <div class="jumbotron">
        <h1>Welcome to a <?= APP_NAME ?></h1>
        <p class="lead">Thank you so much for visiting!</p>
        <div class="btn-group">
          <a href="<?= URL_ROOT . 'users.php' ?>" class="btn btn-primary btn-lg" role="button">Registered Users</a>
          <a href="<?= URL_ROOT . 'register.php' ?>" class="btn btn-success btn-lg">Register</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once 'inc/scripts.php' ?>