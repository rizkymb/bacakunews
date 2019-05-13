<!DOCTYPE html>
<html>
<head>
	<title>Blog Php</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 align="center">Input Form</h1>
	<br>
	<form method="post" action="prosesinputpost.php" enctype="multipart/form-data">
	<table align="center">
			<tr>
				<td>Title</td>
				<td>:</td>
				<td><input type="text" name="post_title" size="50"></input></td>
			</tr>
			<tr>
				<td>Date</td>
				<td>:</td>
				<td><input type="date" name="post_date"></input></td>
			</tr>
			<tr>
				<td>Insert Image</td>
				<td>:</td>
				<td><input type="file" name="gambar"></input></td>
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
							<option value="<?php echo $r ['category_id']?>"><?php echo $r ['nama_category'] ?></option>
							}
						<?php } ?>
					</select>


					 <!-- <select name="category_id">
					 <option value="">Choose Category</option>
					 <option value="1">Automotif</option>
					 <option value="2">Economy</option>
					 <option value="3">Technology</option>
					 <option value="4">International</option>
					 <option value="5">Education</option>
					 <option value="6">Health</option>
					 <option value="7">Politics</option>
				    </select> -->
				</td>
			</tr>
			<tr>
				<td>Content</td>
				<td>:</td>
				<td><textarea name="content" cols="50" rows="5" id="editor"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><br>
					<button>Save</button>
					<button type="reset">Reset</button>
				</td>
			</tr>
	</table>
	<br>
	</form>
	<script type="text/javascript">
		CKEDITOR.replace('editor');
	</script>

</body>
</html>