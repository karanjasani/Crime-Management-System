<?php
session_start();

$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("project",$conn);


if($_SESSION['uid'])
{
	$complainer = $_SESSION['uid'];
	$vn = $_POST['vn'];
	$va = $_POST['va'];
	$vadd = $_POST['vadd'];
	$cadd = $_POST['cadd'];
	$ct = $_POST['ct'];
	$cty = $_POST['cty'];
	$cto = $_POST['cto'];
	$cdes = $_POST['cdes'];

		
	$sql = "insert into complain (complainer,v_name,age,v_addr,c_addr,t_crime,typ_crime,comp_to,desc_crime) values 
			('".$complainer."','" .$vn. "','" .$va. "','" .$vadd. "','" .$cadd. 
										"','" .$ct. "','" .$cty. "','" .$cto. "','" .$cdes."')";


	$res = mysql_query($sql) or die(mysql_error());
}

if(!$res)
	{
		echo "failed".mysql_error();
		echo "Complain failed to register";
	}
	else
	{	
		echo "Complain registered successfully";
	}
	
	?>

