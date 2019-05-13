<!DOCTYPE html>
<html>
<head>
	<title>Blog Php</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 align="center">Input User</h1>
	<br>
	<form method="post" action="prosesinputuser.php" enctype="multipart/form-data">
	<table align="center">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="namauser" size="50"></input></td>

			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" name="password" size="50"></input></td>

			</tr>
			<tr>
				<td>Level</td>
				<td>:</td>
				<td><input type="text" name="level" size="50"></input></td>

			</tr>

			<tr>
				<td colspan="2"><button>Save</button>
					<button type="reset">Reset</button>
				</td>

			</tr>
	</table>
	<br>
	</form>
</body>
</html>