<?php

session_start();

?>

<!doctype HTML>
<html>
<head>
<meta charset="utf-8">
    <title>View Topics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.js"></script>

	</head>
<body>

	<script>
function goback()
{
	
  
}
</script>

<div id="content">
<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("project",$conn);

$user = $_SESSION['username'];

$cid = $_GET['cid'];
$tid = $_GET['tid'];


echo "<a href='view_catg.php?cid=".$cid."'><input type='button' value='back'></a><br>";


$sql = "select * from topics where catagory_id='".$cid."' and id='".$tid."' LIMIT 1";
$res = mysql_query($sql) or die(mysql_error());
if(mysql_num_rows($res) == 1)
{
	echo "<table width='100%'>";
	if($_SESSION['uid'])
	{
		echo " <a href='post_reply.php?cid=".$cid."&tid=".$tid."'><input type='submit' value='Add Reply' /></a><hr />";
	}
	else
	{
		echo "<tr><td colspan='2'><p>Please log in to add ypur reply.</p><hr /></td></tr>";
	}
	while($row = mysql_fetch_assoc($res))
	{
		$sql2 = "select * from post where catagory_id='".$cid."' and topic_id='".$tid."'";
		$res2 =mysql_query($sql2) or die(mysql_error());
	while($row2 = mysql_fetch_assoc($res2))
	{
		echo "<tr><td valign='top' style='border: 1px solid #000000;'><div style='min-height: 125px;'>".$row['topic_title']."<br />
			  by ".$user." - ".$row2['post_date']."<hr />".$row2['post_content']."</div></td></tr>";
	}
	$old_views = $row['topic_views'];
	$new_views = $old_views + 1;
	$sql3 = "update topics set topic_views='".$new_views."' where catagory_id='".$cid."' and id='".$tid."' LIMIT 1";
	$res3 = mysql_query($sql3) or die(mysql_error());

	}
	echo "</table>";
}
else
{
	echo "<p> This topic does not exist.</p>";
}

		
?>
</div>
</body>
</html>
