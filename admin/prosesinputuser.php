<?php

include '../database/config.php';


$namauser = $_POST['namauser'];
$password = $_POST['password'];
$level = $_POST['level'];



if ($namauser=='') {
	echo "<h1 style='color:red;'>Name Tidak Boleh Kosong</h1>";
}
elseif ($password=='') {
	echo "<h1 style='color:red;'>Password Tidak Boleh Kosong</h1>";
}
elseif ($level=='') {
	echo "<h1 style='color:red;'>Level Tidak Boleh Kosong</h1>";
}
else{
	
	$sql = "INSERT INTO tb_user (namauser,password,level)	VALUES ('$namauser','$password','$level')";

	mysqli_query($conn, $sql) or die(mysql_error($conn));

	header("location:index.php?m=User");

}




?>