<?php 

include '../database/config.php';

$sql = "SELECT * FROM tb_category ORDER BY category_id ASC";

$query = mysqli_query($conn, $sql);

?>
<br>

<form>
	<center>
	<a href="index.php?m=inputcategory" style="text-decoration: none;">New Category</a>
	</center>
</form>
<br>
<table border="1" align="center">
	<tr>
		<th>No</th>
		<th>Category Nama</th>
		<th>Jumlah Konten</th>
		<th>Aksi</th>

	</tr>
	<?php

	$no = 1;
	while($row = mysqli_fetch_array($query)) { ?>
	<tr>
		<?php
		$ID=$row['category_id'];

		$que = mysqli_query($conn, "SELECT * FROM tb_post INNER JOIN tb_category ON tb_post.category_id=tb_category.category_id WHERE tb_post.category_id=$ID");
		$count = mysqli_num_rows($que);

		?>
		<td><?php echo $no++ ?></td>
		<td><?php echo $row ['nama_category'] ?></td>
		<td><?php echo $count ?></td>
		<td>
		<a href="index.php?m=categoryubah&ID=<?php echo $row ['category_id'] ?>"  style="text-decoration: none;">Ubah</a> |
		<a href="categoryhapus.php?ID=<?php echo $row ['category_id'] ?>"  onclick="return confirm('Are You Sure ?')"  style="text-decoration: none;">Hapus</a>
		</td>

	
	</tr>

	<?php } ?>
	
</table>
<br>
<br>
