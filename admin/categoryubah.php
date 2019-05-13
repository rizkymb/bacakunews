<?php 

$category_id = $_GET['ID'];
$sql = "SELECT * FROM tb_category WHERE category_id='$category_id'";

$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

?>

<h1 align="center">Ubah Form</h1>
	<br>
	<form method="post" action="prosesubahcategory.php?ID=<?php echo $row ['category_id'] ?>" enctype="multipart/form-data">
	<table align="center">
		<tr>
				<td>Category Name</td>
				<td>:</td>
				<td><input type="text" name="nama_category" value="<?php echo $row ['nama_category'] ?>" size="50"></input></td>
			</tr>
			<td colspan="2">
				<br>
				<button>SIMPAN</button>
			</td>
			</tr>
	</table>
	</form>