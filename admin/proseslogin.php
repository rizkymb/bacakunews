<?php 
session_start();
include '../database/config.php';

$user = $_POST['user'];
$pass = $_POST['pass'];

$query = mysqli_query($conn, "SELECT * FROM tb_user WHERE namauser='$user' AND password='$pass'");

$row = mysqli_fetch_array($query);


if ($row) {
	header("location:index.php");
	$_SESSION['login'] = $row ['namauser'];
	$_SESSION['level'] = $row ['level'];
}else {
	echo '<script>alert("Login Gagal, Harap Cek Username Dan Password");location.href="login.php"</script>';
}

?>