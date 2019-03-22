
<?php 
      if(!isset($_SESSION['logged_in'])) : 
      header("Location: login.php");  
?>


<?php
session_start();
$connection=mysqli_connect("localhost","root","","klu");

if(isset($_POST['log'])){
	$user=$_POST['mail'];
	$_SESSION['user']=$user;
	$sql="SELECT * FROM work_space WHERE email='".$_POST['mail']."'";
	$result=mysqli_query($connection,$sql) or die(mysqli_error($connection));
	$flag=0;
	if(mysqli_num_rows($result)==1){
		while($row = mysqli_fetch_array($result)){
			if($row['password']==$_POST['pass'] And $row['email']==$_POST['mail']){
				$flag=1;
				break;
			}
		}
	}
	if($flag==1)
		Header('Location:editwn.php');
	else
		echo "Login Failed"."<br/>";

	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Work space</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="logincss.css">
</head>
<body>
	<header>
		<div>
			Webnote - Work space.
		</div>
		
	</header>
	<div class="loginBox">
		<img src="user.png" class="user">
		<h2>Log In Here</h2>
		<form method="POST" action="#">
			<p>Email</p>
			<input type="text" name="mail" placeholder="Enter Email">
			<p>Password</p>
			<input type="password" name="pass" placeholder="*******">
			<input type="submit" name="log" value="Sign In">
			<p><div style="float: left;"><a href="#">Forget Password?</a></div><div><a href="signup.php" style="float: right;">New User?Signup!</a></p></div></br>
			
			<p class="format">
</p>
		</form>
	</div>

</body>
</html>
