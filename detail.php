<?php 
$ID = $_GET['ID'];

$query = mysqli_query($conn,"SELECT * FROM tb_post LEFT JOIN tb_category ON tb_category.category_id=tb_post.category_id WHERE post_id='$ID'");

$row = mysqli_fetch_array($query);

?>

<br>
<div class="col-md-9" style="padding-left: 0px; padding-right: 70px;">
	<h1 style="font-weight: bold;padding-left: auto;"><?php echo $row ['post_title']?></h1>
	<p style="color: grey;">Posted on <?php echo $row ['post_date'] ?> on <span class="label label-info"><?php echo $row ['nama_category'] ?></span></p>
	<img class="recentresponsive" src="assets/image/post/<?php echo $row ['image'] ?>" width="94%" height="370px">
	<p><?php echo $row ['content']?></p>
	<br><br>
	<h4>Share This Article&nbsp;<span class="glyphicon glyphicon-globe"></span></h4><br><br>
	<a href="https://www.facebook.com/share.php?u=" target="blank"><img src="assets/image/component/facebook.png" width="65px"></a>
	<a href="https://twitter.com/" target="blank"><img src="assets/image/component/twitter.png" width="65px"></a>
	<hr>
	<br>				
	<div class="panel heading">
		<label>Post A Comments</label>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
					<div class="panel-body">
					<form method="post" action="comment.php?ID=<?php echo $row ['post_id']?>">
						<div class="form-group">
							<label>Name</label>
							<input class="form-control" name="name" required></input>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input class="form-control" name="email" required></input>
						</div>
						<div class="form-group">
							<label>Your Comment</label>
							<input class="form-control" name="comment" required></input>
						</div>
						<div class="form-group">
							<button class="btn btn-primary"><span class="glyphicon glyphicon-send"></span> Send Comment</button>
						</div>
					</form>
					</div>
				</div>
			</div>	
			
		</div>
		<?php 
		$query = mysqli_query($conn, "SELECT * FROM tb_comment WHERE post_id='$ID' ORDER BY comment_date");
		while ($row = mysqli_fetch_array($query)){?>
		<div>
			<h4><img src="assets/image/component/usercomment.png" width="40px">&nbsp;<?php echo $row['name']?></h4>
			<div><small>commented on <?php echo $row['comment_date']?></small></div>
			<blockquote><?php echo $row['comment']?></blockquote>
			<button class="glyphicon glyphicon-pencil">Reply</button>
			<hr>

		</div>
		<?php }?>
</div>
<div class="col-md-3"><br><br><br><br>
	<h2>Recent Post</h2>
	<div class="panel panel-primary"></div>
	<?php 

	$query = mysqli_query($conn, "SELECT * FROM tb_post LEFT JOIN tb_category ON tb_category.category_id=tb_post.category_id 
		ORDER BY post_date DESC LIMIT 5");

	while($row = mysqli_fetch_array($query)) { ?>
	
			<img class="recentresponsive" src="assets/image/post/<?php echo $row ['image']?>" width="100%" height="180px">
		 	<small> Posted on <?php echo $row ['post_date'] ?> in <span class="label label-info"><?php echo $row ['nama_category'] ?></span>
		 	<p style="font-size: 17px;">
		 	<b><a class="a" href="?m=detail&ID=<?php echo $row ['post_id']?>" "><?php echo $row ['post_title']?></a></p></b>
		 	</small>
		 

	<?php } ?>

	
	<h2>Jump To Category</h2>
	<div class="panel panel-primary"></div>
	<?php 

	$query = mysqli_query($conn, "SELECT * FROM tb_category");

	while($row = mysqli_fetch_array($query)) { ?>

	<h4><a href="?m=category&category=<?php echo $row ['nama_category']?>"><?php echo $row ['nama_category']?></a></h4>

	<?php } ?>
	
</div>


