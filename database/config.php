<?php 

error_reporting(~E_NOTICE);
session_start();

$server   = "localhost";
$user     = "root";
$pass	  = "";
$database = "db_blog";

$conn = mysqli_connect($server,$user,$pass,$database);

?>