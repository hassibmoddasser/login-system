<?php
session_start();

require_once 'config/config.php';

unset($_SESSION['user_name']);
unset($_SESSION['login_status']);
session_destroy();

header('Location: ' . URL_ROOT . 'login.php');
?>