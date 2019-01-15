<?php
session_start();

$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("project",$conn);

echo "<h1 style='text-align:center;'>Welcome " .$_SESSION['username']."..!</h1>";

$sql = "select * from complain where comp_to = 'ngo'";
$res = mysql_query($sql) or die(mysql_error());
$com = "";

if(mysql_num_rows($res5) > 0)
{
	while($row8 = mysql_fetch_assoc($res))
	{
		$complainer = $row8['complainer'];
		$vn = $row8['v_name'];
		$va = $row8['age'];
		$vadd = $row8['v_addr'];
		$cadd = $row8['c_addr'];
		$ct = $row8['t_crime'];
		$cty = $row8['typ_crime'];
		$cto = $row8['comp_to'];
		$cdes = $row8['desc_crime'];
		$stat = $row8['status'];
		$com .= "<div id='acc'><hr>";
		$com .= "Complainer: " .$complainer. "<br>Victim name: " .$vn. "<br>Age: " .$va. "<br>Address: " .$vadd.
				 "<br>Crime place: " .$cadd. "<br>Time: " .$ct. "<br>Type: " .$cty. "<br>Describtion: " .$cdes. "<br>Status: " .$stat ; 
		$com .= "</div>";
	}
	echo $com;
}

?>


<html>
<style>
	#acc
{
	background: grey;
}

#fm
{
	margin-left: 500px;
	text-align: center;
	background-color: ffcc66;
	width: 300px;
	height: 150px;
}

. fbc
{
	background-color: ffff99;
}
</style>
<html>
<head>
	<body>
		<div id="fm">
		<h3> Change complain status</h3>
		<form action="status.php" method="POST">
			<table style="text-align:center;">
			<tr><td>complain id :</td><td><input type="number" name="comid" class="fbc"></td></tr>
			<tr><td>Status      :</td><td><input type="text" name="stat" placeholder="checked" class="fbc"></td></tr>
			<tr><td col span="2"><input type="submit" name="submit" value="submit"></td></tr>
		</table>
		</form>
	</div>

	</body>
	</head>
		</html>
