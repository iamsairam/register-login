<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
<form method="post" class="bg-light p-3">
	<h1 class="text-center">REGISTER</h1>
	<div class="form-group">
	<label  for="fullname">NAME</label>
	<input type="text" name="fullname" class="form-control">
	</div>

	<div class="form-group">
	<label for="email">EAMIL</label>
	<input type="email" name="email" class="form-control">
	</div>
	<div class="form-group">
	<label for="phonenumber">Phone Number</label>
	<input type="text" name="phno" class="form-control">
	</div>
	<div class="form-group">
	<label for="password">Password</label>
	<input type="password" name="password" class="form-control">
	</div>

	<div class="form-check form-check-inline">
	<label for="gender">Gender</label> &nbsp;&nbsp;&nbsp;
	<label for="male">MALE <input type="radio" name="gender" class="form-check-input" value="MALE"></label>
	<label for="male">FEMALE <input type="radio" name="gender" class="form-check-input" value="FEMALE"></label>
	</div>
	
	<div class="form-group">
	<label for="DOB">DateOfBirth</label>
	<input type="date" name="dob" class="form-control">
	</div>

	<div class="form-group">
		<label form="address">Address</label>
		<textarea placeholder="Enter Your Address" class="form-control" rows="4" name="address"></textarea>
	</div>

	<div class="form-group">
		<label for="select">Choose Your Country</label>
		<select class="form-control" name="country">
			<option class="form-control" value="">---Choose Your Country Here---</option>
			<option class="form-control" value="INDIA">INDIA</option>
			<option class="form-control" value="USA">USA</option>
			<option class="form-control" value="Others">OTHERS</option>
		</select>
	</div>
	<div class="form-check form-check-inline">
		<label for="male">I <input type="checkbox" name="gender" class="form-check-input" value="MALE">agree to the terms and Conditions</label>
	</div>
	<div class="form-group">
		<input type="reset" name="" class="btn btn-block btn-outline-dark btn-lg">
		<input type="submit" name="subbtn" class="btn btn-block btn-outline-primary btn-lg">
	</div>

<?php
	
if (isset($_POST['subbtn'])) {
	$name=$_POST['fullname'];
	$email=$_POST['email'];
	$phone=$_POST['phno'];
	$password=$_POST['password'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$address=$_POST['address'];
	$country=$_POST['country'];

$conn=mysqli_connect("localhost","root","","userlog");
$query="INSERT INTO details(name,email,phone,password,gender,dob,address,country)VALUES('$name','$email','$phone','$password','$gender','$dob','$address','$country')";
if (mysqli_query($conn,$query)) {
	header("Location:login.php");
}
else{
	echo "Query wrong!";
}

}
?>
</form>
</div>
</body>
</html>