<html>
<?php

session_start();
$connection=mysqli_connect("localhost","root","","klu");

	$user=$_SESSION['user'];
$sql = "SELECT * FROM work_space WHERE email='".$user."'";

$result=mysqli_query($connection,$sql) or die(mysqli_error($connection));
$str="";
if(mysqli_num_rows($result)>0)
{
	
	while($row=mysqli_fetch_array($result)){
		$str=$str.$row['data0'];

	}
}
if(isset($_POST['Logout'])){
	
      Header('Location:login.php');
}

if(isset($_POST['b0'])){
	Header('Location:editwn.php');

}
elseif(isset($_POST['b1'])){
	Header('Location:ed1.php');

}
elseif(isset($_POST['b2'])){
	Header('Location:ed2.php');

}
elseif(isset($_POST['b3'])){
	Header('Location:ed3.php');

}
elseif(isset($_POST['b4'])){
	Header('Location:ed4.php');

}
elseif(isset($_POST['b5'])){
	Header('Location:ed5.php');

}
elseif(isset($_POST['b6'])){
	Header('Location:ed6.php');

}
elseif(isset($_POST['b7'])){
	Header('Location:ed7.php');

}
elseif(isset($_POST['b8'])){
	Header('Location:ed8.php');

}
elseif(isset($_POST['b9'])){
	Header('Location:ed9.php');

}

if(isset($_POST['edit']))
{
		//echo $_POST['textbox']."<br>";

		$sql1="UPDATE work_space SET data0='".$_POST['textbox']."'WHERE email='".$user."'";
		$result2=mysqli_query($connection,$sql1) or die(mysqli_error($connection));
		$sql2 = "SELECT * FROM work_space WHERE email='".$user."'";
		$str="";
		$result1=mysqli_query($connection,$sql2) or die(mysqli_error($connection));
		if(mysqli_num_rows($result1)>0)
		{
			while($row=mysqli_fetch_array($result1))
			{
				$str=$str.$row['data0'];
			}
		}
		
}



?>
<head>
		<link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>
	
	<div id="sidebar">
		<div class="toggle-btn" onclick="toggleslidebar()">
			<span></span>
			<span></span>
			<span></span>
			<form method="POST">
		</div>
		<ul>
			<input type="submit" value="document-0" name="b0">
			<input type="submit" value="document-1" name="b1">
			<input type="submit" value="document-2" name="b2">
			<input type="submit" value="document-3" name="b3">
			<input type="submit" value="document-4" name="b4">
			<input type="submit" value="document-5" name="b5">
			<input type="submit" value="document-6" name="b6">
			<input type="submit" value="document-7" name="b7">
			<input type="submit" value="document-8" name="b8">
			<input type="submit" value="document-9" name="b9">
			
		</ul>
	</div>
</form>
	<script type="text/javascript" src="edd.js"></script>

	<form method="POST">
		<!--<input id="abc" type="text" value="<?php //echo $str ?>">-->
		<textarea class="box" rows="30" cols="150" name="textbox"><?php echo $str; ?></textarea></br>
		<input class="but" type="submit" name="edit" value="Save the text">
		<input class="but" type="submit" name="Logout" value="Logout">
	</form>
</body>
</html>
