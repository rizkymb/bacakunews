<?php 
$ID = $_GET['category'];
$hal = $_GET['hal'];

$hitung = mysqli_query($conn, "SELECT * FROM tb_post LEFT JOIN tb_category ON tb_category.category_id=tb_post.category_id WHERE nama_category='$ID' ORDER BY post_date DESC");
$hitung1 = mysqli_num_rows($hitung);
$hitung2 = ceil($hitung1/6);
$filter = ($hal-1)*6;	
?>

<br><br>
<div class="container">
<div class="row">
	<?php 

	$isi = mysqli_query($conn,"SELECT * FROM tb_post LEFT JOIN tb_category ON tb_category.category_id=tb_post.category_id WHERE nama_category='$ID' ORDER BY post_date DESC LIMIT 6");

if ($hal!="") 
{
	$isi = mysqli_query($conn,"SELECT * FROM tb_post LEFT JOIN tb_category ON tb_category.category_id=tb_post.category_id WHERE nama_category='$ID' ORDER BY post_date DESC LIMIT $filter,6");
}


	while($row = mysqli_fetch_array($isi)) { ?>
		<div class="col-md-4">

		<img class="recentresponsive" src="assets/image/post/<?php echo $row ['image']?>" width="100%" height="200px">
		 	<small> Posted on <?php echo $row ['post_date'] ?> in <span class="label label-info"><?php echo $row ['nama_category'] ?></span>
		 	<p style="font-size: 21px;">
		 	<a style="text-decoration: none;" width="2px" href="?m=detail&ID=<?php echo $row ['post_id']?>" ><?php echo $row ['post_title']?></a></p>
		  </small>
		</div>
<?php } ?>
</div>
</div>
<br><center>
<div class="pagination" align="center">
<?php 
for ($page=1; $page<=$hitung2 ; $page++) { 
	
?>
  <a style="text-decoration: none;"href="?m=category&category=<?php echo $ID?>&hal=<?php echo $page?>"><?php echo $page?></a>

<?php } ?>
</div>

</center>

