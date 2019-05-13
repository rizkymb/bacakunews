<?php 

include '../database/config.php';

$q = $_GET['q'];

$sql = "SELECT * 
		FROM tb_post LEFT JOIN tb_category ON tb_category.category_id=tb_post.category_id
		WHERE post_title LIKE '%$q%' 
		ORDER BY post_date DESC";
$query = mysqli_query($conn, $sql);

?>
<br>

<form>
	<input type="hidden" name="m" value="Post"></input>
	<input type="text" name="q" value="<?php echo $q?>" placeholder="Search Article..." style="margin-left: 8%;">
	<button>Search</button>
		<select name="category_id_sort">
						<option value="">Sort By</option>
						<?php 
							$query2 = mysqli_query($conn, "select * from tb_category");
							while ($as = mysqli_fetch_array($query2)) {?>
							<option value="<?php echo $as['category_id']?>"><?php echo $as ['nama_category'] ?></option>
							}
						<?php } ?>
		</select>
	<button>Sort</button>
	<button><a href="index.php?m=inputpost" style="text-decoration: none;color: black;">New Post</a></button>
</form>
<br>
<table border="1" align="center">
	<tr>
		<th>No</th>
		<th>Title</th>
		<th>Date</th>
		<th>Category</th>
		<th>Content</th>
		<th>Image</th>
		<th>Action</th>
	</tr>
	<?php
	$no = 1;
	while($row = mysqli_fetch_array($query)) { ?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $row ['post_title'] ?></td>
		<td><?php echo $row ['post_date'] ?></td>
		<td><center><?php echo $row ['nama_category'] ?></center></td>
		<td><?php echo substr(strip_tags($row ['content']),0, 10) ?></td>
		<td><img src="../assets/image/post/<?php echo $row ['image'] ?>" height="120px" width="250px"></td>
		<td>
		<a href="index.php?m=postubah&ID=<?php echo $row ['post_id'] ?>">Ubah</a> |
		<a href="posthapus.php?ID=<?php echo $row ['post_id'] ?>" onclick="return confirm('Are You Sure ?')"  style="text-decoration: none;">Hapus</a>
		</td>
	
	</tr>

	<?php }  ?>
	
</table>
<br>
<br>
