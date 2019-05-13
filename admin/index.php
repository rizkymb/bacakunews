<?php 

	include '../database/config.php';

	if ($_SESSION['login']=='') 
		header("location:login.php")

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Area</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/styleain.css">
	<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
</head>
<body>
	<table class="wrapper">
	<tr>
		<td class="header"><img src="../assets/image/component/logo.png" width="400px"></td>
	</tr>
	<tr>
	
		<td class="menu">
			
			<a href="index.php?m=Post">Post</a>
			<a href="index.php?m=Category">Category</a>
			<?php 
			$level = $_SESSION['level'];
			if ($level=="admin") 
			{ ?>

		    <a href="index.php?m=User">User</a>

			<?php 				
			}
			?>
			<a href="logout.php">Logout</a>
			
			</td>

		
			
	</tr>
	<tr>
		<td>
			<?php 
				$m = $_GET['m'];
				if ($m=='Post'){
					include 'post.php';
				}elseif ($m=='post_tambah') {
					include 'post_tambah';
				}elseif ($m=='Category') {
					include 'category.php';
				}elseif ($m=='postubah') {
					include 'postubah.php';
				}elseif ($m=='inputpost') {
					include 'inputpost.php';
				}elseif ($m=='categoryubah') {
					include 'categoryubah.php';
				}elseif ($m=='inputcategory') {
					include 'inputcategory.php';
				}elseif ($m=='User') {
					include 'user.php';
				}elseif ($m=='userubah') {
					include 'userubah.php';
				}elseif ($m=='inputuser') {
					include 'inputuser.php';
				}elseif ($m=='') {
					include 'post.php';}

			?>
		</td>
	</tr>
	<tr>
		<td class="footer"><font color="white" size="4px">Copyright &copy; BACAKU 2018 Alright Reserved</font></td>
	</tr>
	</table>

</body>
</html>