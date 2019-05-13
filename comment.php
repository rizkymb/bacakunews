<?php 

include 'database/config.php';

$post_id = $_GET['ID'];
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];


if ($name=='' || $email=='' || $comment=='') {
	echo "filed marked * is required!";	
}else{
	$query = mysqli_query($conn, "INSERT INTO tb_comment (comment_date,post_id,name,email,comment)
		VALUES (NOW(),'$post_id','$name','$email','$comment')");

	echo '<script>alert("Comment Submited !");location.href="index.php?m=detail&ID='.$post_id.'"</script>';
}
?>

