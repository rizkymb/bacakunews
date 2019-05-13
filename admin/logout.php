<?php 

include '../database/config.php';

unset($_SESSION['login']);
header("location:login.php");

?>