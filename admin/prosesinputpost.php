<?php

include '../database/config.php';


$post_title = $_POST['post_title'];
$post_date = $_POST['post_date'];
$category_id = $_POST['category_id'];
$content = $_POST['content'];
$gambar = $_FILES['gambar'];


if ($post_title=='') {
	echo "<h1 style='color:red;'>Judul Tidak Boleh Kosong</h1>";
}
else if ($post_date=='') {
	echo "<h1 style='color:red;'>Tanggal Tidak Boleh Kosong</h1>";
}
else if ($category_id=='') {
	echo "<h1 style='color:red;'>Silahkan pilih kategory</h1>";
}
else if ($content=='') {
	echo "<h1 style='color:red;'>Silahkan isi Content</h1>";
}
else if ($gambar['name']=='') {
	echo "<h1 style='color:red;'>Silahkan pilih Gambar</h1>";
}
else{
	$nama = rand(1, 99999) . $gambar['name'];

	move_uploaded_file($gambar['tmp_name'], "../assets/image/post/$nama");

	$sql = "INSERT INTO tb_post (post_title,post_date,content,image,category_id)
			VALUES ('$post_title','$post_date','$content','$nama','$category_id')";

	mysqli_query($conn, $sql) or die(mysql_error($conn));

	header("location:index.php?m=Post");
	
}




?>