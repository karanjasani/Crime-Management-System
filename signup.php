<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("project",$conn);
?>

<?php

	$username = $_POST['n'];
	$password = $_POST['p'];
	$id = $_POST['id'];
	
	$sql = "insert into login values('','" .$username. "','" .$password. "','" .$id. "', '')";
	
	$query = mysql_query($sql);

	
	if(!$query)
	{
		echo "failed".mysql_error();
		echo "<br><a href='signupform.php'>signup</a>";
	}
	else
		echo "successfull";
		echo "<br><a href='signinform.php'>signin</a>";
?>

