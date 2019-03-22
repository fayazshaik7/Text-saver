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
		echo $user;






 ?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>

	<div id="sidebar">
		<div class="toggle-btn" onclick="toggleslidebar()">
			<span></span>
			<span></span>
			<span></span>

		</div>
		<ul>
			<input type="submit" value="document-0" name="">
			<input type="submit" value="document-1" name="">
			<input type="submit" value="document-2" name="">
			<input type="submit" value="document-3" name="">
			<input type="submit" value="document-4" name="">
			<input type="submit" value="document-5" name="">
			<input type="submit" value="document-6" name="">
			<input type="submit" value="document-7" name="">
			<input type="submit" value="document-8" name="">
			<input type="submit" value="document-9" name="">
			
		</ul>
	</div>
	<script type="text/javascript" src="edd.js"></script>
	<form method="POST">
		<!--<input id="abc" type="text" value="<?php //echo $str ?>">-->
		<textarea class="box" rows="30" cols="150" name="textbox"></textarea></br>
		<input class="but" type="submit" name="edit" value="Save the text">
	</form>
</body>
</html>