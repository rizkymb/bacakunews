	<?php 

	include '../database/config.php';

	$ID = $_GET['ID'];

	mysqli_query($conn, "DELETE FROM tb_user WHERE iduser='$ID'");

	header("location:index.php?m=User")

	?>