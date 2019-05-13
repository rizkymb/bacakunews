<?php  
include '../database/config.php';

$post_id = $_GET['ID'];
$post_title = $_POST['post_title'];
$post_date = $_POST['post_date'];
$category_id = $_POST['category_id'];
$content = $_POST['content'];
$gambar = $_FILES['gambar'];

if ($post_title=='') {
	echo "Judul Masih Kosong";
} elseif ($post_date=='') {
	echo "Isikan Tanggal Post";
}elseif ($category_id=='') {
	echo "Pilih Kategori";
}elseif ($content=='') {
	echo "Content masih kosong";
}
else 
{
	if ($gambar['tmp_name']=='') {
		$sql = "UPDATE tb_post SET post_title='$post_title', post_date='$post_date', content='$content', category_id='$category_id' 
			WHERE post_id=$post_id";
	}else {
		$nama = rand(1, 99999) . $gambar['name'];

		move_uploaded_file($gambar['tmp_name'], "../assets/image/post/$nama");

		$sql = "UPDATE tb_post SET post_title='$post_title', post_date='$post_date', content='$content', image='$nama',category_id='$category_id' 
		WHERE post_id=$post_id";
	}

	mysqli_query($conn, $sql);

	header("location:index.php?m=Post");
}




?>