<?php

$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("project",$conn);

session_start();

?>

<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "select * from login where(username='" .$username. "' and password='" .$password. "')";

	$res= mysql_query($sql);
	
	if(mysql_num_rows($res) ==1)
	{
		$row = mysql_fetch_assoc($res);
		$_SESSION['uid'] = $row['id'];
		$_SESSION['username'] = $row['username'];
		header("location: index.php");
	}
	else
	{
		echo " invalid login information. PLease return to the prvious page.";
	}

	
	
?>