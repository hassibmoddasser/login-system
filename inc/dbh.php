<?php
require_once 'config/config.php';

$con = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (mysqli_connect_errno()) {
  die('ERROR: ' . mysqli_connect_error());
}

function filter($str) {
  global $con;
  if (!is_string($str)) {
    return FALSE;
  }
  return @mysqli_real_escape_string($con, strip_tags($str));
}
?>