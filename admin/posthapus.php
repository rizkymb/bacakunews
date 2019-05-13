	<?php 

	include '../database/config.php';

	$ID = $_GET['ID'];

	mysqli_query($conn, "DELETE FROM tb_post WHERE post_id='$ID'");

	header("location:index.php?m=Post")

	?>