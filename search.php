

<?php 

include 'database/config.php';

$q = $_GET['q'];

$sql = "SELECT * 
		FROM tb_post LEFT JOIN tb_category ON tb_category.category_id=tb_post.category_id
		WHERE post_title LIKE '%$q%' 
		ORDER BY post_date DESC";

$query = mysqli_query($conn, $sql); ?>

<div class="container">
<h1>Result for "<?php echo $q ?>"</h1><br><br>

	<div class="row">
	<?php while($row = mysqli_fetch_array($query)) { ?>
	<div class="col-md-6">
		<div>
		 	<small style="color: black;"> Posted on <?php echo $row ['post_date'] ?> in <span class="label label-info"><?php echo $row ['nama_category'] ?></span>
		 	<p style="font-size: 19px;">
		 	<a style="color: black;" href="?m=detail&ID=<?php echo $row ['post_id']?>" "><?php echo $row ['post_title']?></a></p>
		  </small>
		<img class="recentresponsive" src="assets/image/post/<?php echo $row ['image']?>" width="100%" height="300px">	<br><br><br><br>
		</div>
		 </div>
		  <?php } ?>
		</div>
	</div>
		 
