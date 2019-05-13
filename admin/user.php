<?php 

include '../database/config.php';

$q = $_GET['q'];

$sql = "SELECT * FROM tb_user ORDER BY namauser";
$query = mysqli_query($conn, $sql);

?>


<h1 align="center">User List</h1>
<center><a href="index.php?m=inputuser" style="text-decoration: none;">New User</a></center><br>
<table border="1" align="center">	
	<tr>
		<th>No</th>
		<th>Nama User</th>
		<th>Level</th>
		<th>Action</th>
	</tr>
	<?php
	$no = 1;
	while($row = mysqli_fetch_array($query)) { ?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $row ['namauser'] ?></td>
		<td><?php echo $row ['level'] ?></td>
		<td>
		<a href="index.php?m=userubah&ID=<?php echo $row ['iduser'] ?>">Ubah</a> |
		<a href="userhapus.php?ID=<?php echo $row ['iduser'] ?>" onclick="return confirm('Are You Sure ?')"  style="text-decoration: none;">Hapus</a>
		</td>
	
	</tr>


	<?php } ?>
	
</table>
<br><br><br><br>