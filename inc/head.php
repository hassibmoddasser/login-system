<?php
session_start();

require_once 'config/config.php';

if (!isset($_SESSION['login_status'])) {
    header('Location: ' . URL_ROOT . 'login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?= APP_NAME ?></title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>