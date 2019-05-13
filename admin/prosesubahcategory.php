<?php  
include '../database/config.php';

$category_id = $_GET['ID'];
$nama_category = $_POST['nama_category'];

if ($nama_category=='') {
	echo "Isikan Nama Category";
}

else 
{
	$sql = "UPDATE tb_category SET nama_category='$nama_category' WHERE category_id=$category_id";
	mysqli_query($conn, $sql);

	header("location:index.php?m=Category");
}




?>