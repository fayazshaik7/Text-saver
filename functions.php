
<?php 
	session_start();
	$connection=mysqli_connect("localhost","root","","klu");
	function main(){
		global $connection;
		$user=$_SESSION['user'];
		$sql = "SELECT * FROM work_space WHERE email='".$user."'";
		$result=mysqli_query($connection,$sql) or die(mysqli_error($connection));
	$str="";
	if(mysqli_num_rows($result)>0)
	{
		
		while($row=mysqli_fetch_array($result)){
			$str=$str.$row['data0'];

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

}
	}

 ?>