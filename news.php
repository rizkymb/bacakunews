<div class="maincona" id="maincona">
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<h2 style=""><b>Recent Post</b></h2>
		</div>
		
	</div>
</div>


<div class="container">
	<div class="row">
	
	<?php 

	$query = mysqli_query($conn, "SELECT * FROM tb_post LEFT JOIN tb_category ON tb_category.category_id=tb_post.category_id 
		ORDER BY post_date DESC LIMIT 0,2");

	while($row = mysqli_fetch_array($query)) { ?>
	
	<div class="col-md-6">

		<img class="recentresponsive" src="assets/image/post/<?php echo $row ['image']?>" width="100%" height="300px">
		 <div class="bottom-left">
		 	<small style="color: white;"> Posted on <?php echo $row ['post_date'] ?> in <span class="label label-info"><?php echo $row ['nama_category'] ?></span>
		 	<p style="font-size: 21px;">
		 	<a style="color: white;" href="?m=detail&ID=<?php echo $row ['post_id']?>" "><?php echo $row ['post_title']?></a></p>
		  </small>
		  </div>	
		 </div>
		 
<?php } ?>

<?php 

	$query = mysqli_query($conn, "SELECT * FROM tb_post LEFT JOIN tb_category ON tb_category.category_id=tb_post.category_id 
		ORDER BY post_date DESC LIMIT 2,3");

	while($row = mysqli_fetch_array($query)) { ?>


	<div class="col-md-4"><br>
	<img src="assets/image/post/<?php echo $row ['image']?>" width="100%" height="220px">
		 	<small> Posted on <?php echo $row ['post_date'] ?> in <span class="label label-info"><?php echo $row ['nama_category'] ?></span>
		 	<p style="font-size: 21px;">
		 	<a class="a" style="text-decoration: none;" width="2px" href="?m=detail&ID=<?php echo $row ['post_id']?>" ><?php echo $row ['post_title']?></a></p>
		  </small>

	</div>


<?php } ?>
</div>
</div>

<div class="container">
	<div class="panel panel-primary"></div>
	<h2 style="padding-right: 18px;"><b><a class="a" href="?m=category&category=Automotif" style="text-decoration: none;">Automotif Post</a></b></h2>	
	<div class="row">
<?php 

	$query = mysqli_query($conn, "SELECT * FROM tb_post LEFT JOIN tb_category ON tb_category.category_id=tb_post.category_id WHERE nama_category='Automotif' ORDER BY post_date DESC LIMIT 0,3" );

	while($row = mysqli_fetch_array($query)) { ?>
	<div class="col-md-4">
		<img class="recentresponsive" src="assets/image/post/<?php echo $row ['image']?>" width="100%" height="200px">
		 <div class="bottom-left">
		 	<small style="color: white;"> Posted on <?php echo $row ['post_date'] ?> in <span class="label label-info"><?php echo $row ['nama_category'] ?></span>
		 	<p style="font-size: 21px;">
		 	<a style="color: white;" href="?m=detail&ID=<?php echo $row ['post_id']?>" "><?php echo $row ['post_title']?></a></p>
		  </small>
		  </div>
   	</div>
	   

<?php } ?>	
</div>
</div>

<div class="container">
	<br>
	<div class="panel panel-primary"></div>
	<h2 style="padding-right: 18px;"><b><a class="a" href="?m=category&category=Economy" style="text-decoration: none;">Economy Post</a></b></h2>	
	<div class="row">
	<?php 

	$query = mysqli_query($conn, "SELECT * FROM tb_post LEFT JOIN tb_category ON tb_category.category_id=tb_post.category_id WHERE nama_category='Economy' ORDER BY post_date DESC LIMIT 0,3" );

	while($row = mysqli_fetch_array($query)) { ?>
		<div class="col-md-4">
		<img class="recentresponsive" src="assets/image/post/<?php echo $row ['image']?>" width="100%" height="200px">
		 	<small> Posted on <?php echo $row ['post_date'] ?> in <span class="label label-info"><?php echo $row ['nama_category'] ?></span>
		 	<p style="font-size: 21px;">
		 	<a class="a" style="text-decoration: none;" width="2px" href="?m=detail&ID=<?php echo $row ['post_id']?>" ><?php echo $row ['post_title']?></a></p>
		  </small>
		</div>
		<?php } ?>
	</div>
</div>

<div class="container">
	<br>
	<div class="panel panel-primary"></div>
	<h2 style="padding-right: 18px;"><b><a class="a" href="?m=category&category=Technology" style="text-decoration: none;">Technology Post</a></b></h2>	
	<div class="row">
	<?php 

	$query = mysqli_query($conn, "SELECT * FROM tb_post LEFT JOIN tb_category ON tb_category.category_id=tb_post.category_id WHERE nama_category='Technology' ORDER BY post_date DESC LIMIT 0,3" );

	while($row = mysqli_fetch_array($query)) { ?>
		<div class="col-md-4">
		<img class="recentresponsive" src="assets/image/post/<?php echo $row ['image']?>" width="100%" height="200px">
		 	<small> Posted on <?php echo $row ['post_date'] ?> in <span class="label label-info"><?php echo $row ['nama_category'] ?></span>
		 	<p style="font-size: 21px;">
		 	<a class="a" style="text-decoration: none;" width="2px" href="?m=detail&ID=<?php echo $row ['post_id']?>" ><?php echo $row ['post_title']?></a></p>
		  </small>
		</div>
		<?php } ?>
	</div>
</div>

<div class="container">
	<br>
	<div class="panel panel-primary"></div>
	<h2 style="padding-right: 18px;"><b><a class="a" href="?m=category&category=International" style="text-decoration: none;">International Post</a></b></h2>	
	<div class="row">
	<?php 

	$query = mysqli_query($conn, "SELECT * FROM tb_post LEFT JOIN tb_category ON tb_category.category_id=tb_post.category_id WHERE nama_category='International' ORDER BY post_date DESC LIMIT 0,3" );

	while($row = mysqli_fetch_array($query)) { ?>
		<div class="col-md-4">
		<img class="recentresponsive" src="assets/image/post/<?php echo $row ['image']?>" width="100%" height="200px">
		 	<small> Posted on <?php echo $row ['post_date'] ?> in <span class="label label-info"><?php echo $row ['nama_category'] ?></span>
		 	<p style="font-size: 21px;">
		 	<a class="a" style="text-decoration: none;" width="2px" href="?m=detail&ID=<?php echo $row ['post_id']?>" ><?php echo $row ['post_title']?></a></p>
		  </small>
		</div>
		<?php } ?>
	</div>
</div>


<div class="container">
	<br>
	<div class="panel panel-primary"></div>
	<h2 style="padding-right: 18px;"><b><a class="a" href="?m=category&category=Education" style="text-decoration: none;">Education Post</a></b></h2>	
	<div class="row">
	<?php 

	$query = mysqli_query($conn, "SELECT * FROM tb_post LEFT JOIN tb_category ON tb_category.category_id=tb_post.category_id WHERE nama_category='Education' ORDER BY post_date DESC LIMIT 0,3" );

	while($row = mysqli_fetch_array($query)) { ?>
		<div class="col-md-4">
		<img class="recentresponsive" src="assets/image/post/<?php echo $row ['image']?>" width="100%" height="200px">
		 	<small> Posted on <?php echo $row ['post_date'] ?> in <span class="label label-info"><?php echo $row ['nama_category'] ?></span>
		 	<p style="font-size: 21px;">
		 	<a class="a" style="text-decoration: none;" width="2px" href="?m=detail&ID=<?php echo $row ['post_id']?>" ><?php echo $row ['post_title']?></a></p>
		  </small>
		</div>
		<?php } ?>
	</div>
</div>


<div class="container">
	<br>
	<div class="panel panel-primary"></div>
	<h2 style="padding-right: 18px;"><b><a class="a" href="?m=category&category=Health" style="text-decoration: none;">Health Post</a></b></h2>	
	<div class="row">
	<?php 

	$query = mysqli_query($conn, "SELECT * FROM tb_post LEFT JOIN tb_category ON tb_category.category_id=tb_post.category_id WHERE nama_category='Health' ORDER BY post_date DESC LIMIT 0,3" );

	while($row = mysqli_fetch_array($query)) { ?>
		<div class="col-md-4">
		<img class="recentresponsive" src="assets/image/post/<?php echo $row ['image']?>" width="100%" height="200px">
		 	<small> Posted on <?php echo $row ['post_date'] ?> in <span class="label label-info"><?php echo $row ['nama_category'] ?></span>
		 	<p style="font-size: 21px;">
		 	<a class="a" style="text-decoration: none;" width="2px" href="?m=detail&ID=<?php echo $row ['post_id']?>" ><?php echo $row ['post_title']?></a></p>
		  </small>
		</div>
		<?php } ?>
	</div>
</div>

<div class="container">
	<br>
	<div class="panel panel-primary"></div>
	<h2 style="padding-right: 18px;"><b><a class="a" href="?m=category&category=Politics" style="text-decoration: none;">Politics Post</a></b></h2>	
	<div class="a" class="row">
	<?php 

	$query = mysqli_query($conn, "SELECT * FROM tb_post LEFT JOIN tb_category ON tb_category.category_id=tb_post.category_id WHERE nama_category='Politics' ORDER BY post_date DESC LIMIT 0,3" );

	while($row = mysqli_fetch_array($query)) { ?>
		<div class="col-md-4">
		<img class="recentresponsive" src="assets/image/post/<?php echo $row ['image']?>" width="100%" height="200px">
		 	<small> Posted on <?php echo $row ['post_date'] ?> in <span class="label label-info"><?php echo $row ['nama_category'] ?></span>
		 	<p style="font-size: 21px;">
		 	<a class="a" style="text-decoration: none;" width="2px" href="?m=detail&ID=<?php echo $row ['post_id']?>" ><?php echo $row ['post_title']?></a></p>
		  </small>
		</div>
		<?php } ?>
	</div>
</div>
</div>



