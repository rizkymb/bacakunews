<?php 

$post_id = $_GET['ID'];
$sql = "SELECT * FROM tb_post WHERE post_id='$post_id'";

$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

?>

<h1 align="center">Ubah Form</h1>
	<br>
	<form method="post" action="prosesubahpost.php?ID=<?php echo $row ['post_id'] ?>" enctype="multipart/form-data">
	<table align="center">
			<tr>
				<td>Title</td>
				<td>:</td>
				<td><input type="text" name="post_title" value="<?php echo $row ['post_title'] ?>" size="50"></input></td>
			</tr>
			<tr>
				<td>Date</td>
				<td>:</td>
				<td><input type="date" name="post_date" value="<?php echo $row ['post_date']?>"></input></td>
			</tr>
			<tr>
				<td>Insert Image</td>
				<td>:</td>
				<td><input type="file" name="gambar"><br>
				<img src="../assets/image/post/<?php echo $row ['image']?>" height="100px">
				</td>

			</tr>
			<tr>
				<td>Category</td>
				<td>:</td>
				<td>
					<select name="category_id">
						<option value="">Pilih Kategori</option>
						<?php 
							$query = mysqli_query($conn, "select * from tb_category");
							while ($r = mysqli_fetch_array($query)) {?>
							<option value="<?php echo $r ['category_id']?>" <?php echo $row ['category_id']==$r ['category_id'] ?
							'selected' : ''?>><?php echo $r ['nama_category'] ?></option>
						<?php } ?>
					</select>




				<!-- <select name="category_id">
					 <option value="">Choose Category</option>
					 <option value="1" <?php echo $row ['category_id']==1? 'selected' : '';?>>Automotif</option>
					 <option value="2" <?php echo $row ['category_id']==2? 'selected' : '';?>>Economy</option>
					 <option value="3" <?php echo $row ['category_id']==3? 'selected' : '';?>>Technology</option>
					 <option value="4" <?php echo $row ['category_id']==4? 'selected' : '';?>>International</option>
					 <option value="5" <?php echo $row ['category_id']==5? 'selected' : '';?>>Education</option>
					 <option value="6" <?php echo $row ['category_id']==6? 'selected' : '';?>>Health</option>
					 <option value="7" <?php echo $row ['category_id']==7? 'selected' : '';?>>Politics</option>
				    </select> -->
				</td>
			</tr>
			<tr>
				<td>Content</td>
				<td>:</td>
				<td><textarea name="content" cols="50" rows="5" id="editor"><?php echo $row ['content']?></textarea></td>
			</tr>
			<tr>
			<td colspan="2">
				<button>SIMPAN</button>
			</td>
			</tr>
	</table>
	</form>
	<script type="text/javascript">
		CKEDITOR.replace('editor');
	</script>