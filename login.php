<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="container bg-light mt-5 p-5">
	<h1 class="text-center">SignUp</h1>
	<form method="post" class="">
		<div class="form-group">
		<label for="name">UserId</label>	
		<input type="text" name="emailpass" class="form-control" placeholder="Email or PhoneNumber">
		</div>
		<div class="form-group">
		<label for="name">Password</label>	
		<input type="password" name="pwd" class="form-control" placeholder="********">
		</div>		
		<div class="form-group">
			<input type="submit" name="btn" class="btn btn-block btn-lg btn-outline-secondary">
		</div>
	</form>
	<?php
	session_start();
	$conn=mysqli_connect('localhost','root','','userlog');
	if (isset($_POST['btn'])) {
		$ids=$_POST['emailpass'];
		$pwd=$_POST['pwd'];
		$query="SELECT * FROM details WHERE (email='$ids' OR phone='$ids') AND password='$pwd'";
		if ($res=mysqli_query($conn,$query)) {
			if (mysqli_num_rows($res) == 1) {
				$_SESSION['uid']=$ids;
				header("Location:userinbox.php");
			}else{echo "FAILED TO LOGIN";}

		}
		else{
			echo "Query Failed to login";
		}

	}
	?>
<?php
if (isset($_GET['logouted'])) {
	echo "LOGOUT SUCCESSFULLY";
}
?>
<?php
if (isset($_GET['plslogin'])) {
	echo "<h1 class='text-danger'>Please Login With Your Credentials";
}
?>
</div>
</body>
</html>