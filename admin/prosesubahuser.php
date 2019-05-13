<?php  
include '../database/config.php';

$iduser = $_GET['ID'];
$namauser = $_POST['namauser'];
$level = $_POST['level'];
$password = $_POST['password'];


if ($namauser=='') {
	echo "Isikan Nama Category";
}
elseif ($level=='') {
	echo "silahkan isikan level";
}
elseif ($password=='') {
	echo "silahkan isikan password";
}

else 
{
	$sql = "UPDATE tb_user SET namauser='$namauser', level='$level',password='$password' WHERE iduser=$iduser";
	mysqli_query($conn, $sql);

	header("location:index.php?m=User");
}




?>