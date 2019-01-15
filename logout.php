<?php

session_start();
//session_unset();
session_destroy();
		


	//	$uname = $_POST['name'];
	///	$_SESSION['userName'] = $uname;

header("location: index.php");
/*
if(!(isset($_SESSION['userName']))) 
{

	echo "error!";
echo " successfully loged out! " .$_SESSION['userName'];
}
else
	
echo " successfully loged out! " .$_SESSION['userName'];

?>*/