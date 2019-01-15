<?php

session_start();

?>

<!doctype HTML>
<html>
<head>
<meta charset="utf-8">
    <title>Forum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.js"></script>


	<style>
#wrapper{
	width: 800px;
	margin-left: auto;
	margin-right: auto;
}

a{
	color: #0000ff;
}

.cat_links{
	display: block;
	padding: 5px;
	padding-top: 10px;
	padding-bottom: 10px;
	border: 1px solid #000000;
	margin-bottom: 5px;
	background-color: #ffff99;
	color: #000000;
}

.cat_links:hover{
	background-color: #dddddd;
}

#f{
	text-align: center;
}
body{
  background: #ffcc66;
}


	</style>

</head>
<body>
<div id="f"><h3>Forum</h3></div>

<script>
function goback()
{
  window.history.back()
}
</script>
<input type="button" value="back" onclick="goback()"><br><br>
<div id="content">
<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("project",$conn);

$sql = "select * from catagories order by catagory_title asc";
$res = mysql_query($sql) or die(mysql_error());
$catagories = "";
if(mysql_num_rows($res) > 0)
{
	while($row = mysql_fetch_assoc($res))
	{
		$id = $row['id'];
		$title = $row['catagory_title'];
		$description = $row['catagory_description'];
		$catagories .= "<a href='view_catg.php?cid=".$id."' class='cat_links'>" . $title. " - <font size'-1'>".$description."</font></a>";
	}
	echo $catagories;
}
else
{
	echo "<p>there is no catagories available yet</p>";
}

?>

</div>
</body>
</html>
