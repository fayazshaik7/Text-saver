

<!DOCTYPE html>
<html>
<head>
	<title>Work space</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="sig.css">
</head>
<body>
	<header>
		<div>
			Webnote - Work space.
		</div>
		
	</header>
	<div class="signinBox">
		<img src="user.png" class="user">
		<h2>Signup here</h2>
		<form target="" method="POST">
			<input type="text" name="name" placeholder="Enter Username" required>
			<input type="text" name="mail" placeholder="Enter Email" required>
			<input type="password" name="pass" placeholder="Enter Password" required>
			<input type="text" name="phn" placeholder="Enter Phonenumber" required>
			<input type="submit" name="submit" value="submit">
<p class="format">
<?php

if(isset($_POST['submit'])){
	$connection = mysqli_connect('localhost','root','','klu');
	$username=$_POST['name'];
	$email=$_POST['mail'];
	$password=$_POST['pass'];
	$phone=$_POST['phn'];

	$query = "INSERT INTO work_space(username,password,phnno,email,data0,data1,data2,data3,data4,data5,data6,data7,data8,data9)";
	$query .="VALUES('$username', '$password' , '$phone', '$email','','','','','','','','','','' )";
	$result=mysqli_query($connection,$query) or die(mysqli_error($connection));
	
	if($result){
		header('Location:login.php');
	}

}


?></p>

		</form>
	</div>
</body>
</html>