<?php
session_start();
?>

<html>
<head>
<style>

#acc
{
	background-color: ffff99;
	margin-top: 10px;
	padding-left: 10px;
}
body{
	background-color: ffcc66;
}

</style>

	</head>
	</html>


<?php

$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("project",$conn);

$complainer = $_SESSION['uid'];

$sql = "select * from complain where complainer=".$complainer;
$sql2 = "select * from login where id=".$complainer;

$res = mysql_query($sql) or die(mysql_error());
$res2 = mysql_query($sql2) or die(mysql_error());
$com = "";

echo "<h1 style='text-align:center;'>Your Complains</h1>";

if(mysql_num_rows($res2) > 0)
{
	while($row10 = mysql_fetch_assoc($res2))
	{
		$nam = $row10['username'];
	}
}

if(mysql_num_rows($res) > 0)
{
	while($row9 = mysql_fetch_assoc($res))
	{
		$comid = $row9['comid'];
		$complainer = $row9['complainer'];
		$vn = $row9['v_name'];
		$va = $row9['age'];
		$vadd = $row9['v_addr'];
		$cadd = $row9['c_addr'];
		$ct = $row9['t_crime'];
		$cty = $row9['typ_crime'];
		$cto = $row9['comp_to'];
		$cdes = $row9['desc_crime'];
		$stat = $row9['status'];
		$com .= "<div id='acc'>";
		$com .= "<b>Complain id:</b> ".$comid. "<br><b>Complainer: </b>" .$nam. "<br><b>Victim name:</b> " .$vn. "<br><b>Age:</b> " .$va. "<br><b>Address:</b> " .$vadd.
				 "<br><b>Crime place:</b> " .$cadd. "<br><b>Time:</b> " .$ct. "<br><b>Type:</b> " .$cty. "<br><b>Describtion:</b> " .$cdes. "<br><b>Status:</b> " .$stat ; 
		$com .= "</div>";
	}
	echo $com;
}
?>
