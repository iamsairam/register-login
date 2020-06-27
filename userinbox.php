<!DOCTYPE html>
<html>
<head>
	<title>user-inbox</title>
</head>
<body>
<?php
session_start();
$user=$_SESSION['uid'];
if(!isset($_SESSION['uid'])){
	header('Location:login.php?plslogin=true');
}
	$conn=mysqli_connect('localhost','root','','userlog');
	$query="SELECT name,gender FROM details WHERE (email='$user' OR phone='$user')";

	if ($res=mysqli_query($conn,$query)) {
		if (mysqli_num_rows($res)==1) {
			while ($row=mysqli_fetch_array($res)) {
				if ($row['gender'] == "MALE") {
					$pre=" MISTER " ;
				}else{$pre="MISS";}
				echo "HI $pre ".$row['name']." Welcome to PHP World!<br>";
				echo "<h1><a href='logout.php'>Logout</a></h1>";
			}
		}else{echo "Duplicate Records Found";}
	}else{echo "Query Wrong!";}


?>
</body>
</html>