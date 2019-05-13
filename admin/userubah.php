<?php 

$iduser = $_GET['ID'];
$sql = "SELECT * FROM tb_user WHERE iduser='$iduser'";

$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

?>

<h1 align="center">Ubah Form</h1>
	<br>
	<form method="post" action="prosesubahuser.php?ID=<?php echo $row ['iduser'] ?>" enctype="multipart/form-data">
	<table align="center">
		<tr>
				<td>Nama User</td>
				<td>:</td>
				<td><input type="text" name="namauser" value="<?php echo $row ['namauser'] ?>" size="50"></input></td>
			</tr>
			<tr>
				<td>Level</td>
				<td>:</td>
				<td><input type="text" name="level" value="<?php echo $row ['level'] ?>" size="50"></input></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" name="password" value="<?php echo $row ['password'] ?>" size="50"></input></td>
			</tr>
			<td colspan="2">
				<br>
				<button>SIMPAN</button>
			</td>
			</tr>
	</table>
	</form>