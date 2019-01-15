<?php

session_start();

$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("project",$conn);

$comid = $_POST['comid'];
$stat = $_POST['stat'];

$sql = "update complain set status='c' where comid='".$comid."' LIMIT 1";

$res = mysql_query($sql) or die(mysql_error());

if($res)
{
	echo "status changed successfully";
}
else
{
	echo "error in status change pleasse try again later";
}


?>
