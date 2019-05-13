<?php

include '../database/config.php';


$nama_category = $_POST['nama_category'];

if ($nama_category=='') {
	echo "<h1 style='color:red;'>Name Tidak Boleh Kosong</h1>";
}
else{
	
	$sql = "INSERT INTO tb_category (nama_category)	VALUES ('$nama_category')";

	mysqli_query($conn, $sql) or die(mysql_error($conn));

	header("location:index.php?m=Category");

}




?>