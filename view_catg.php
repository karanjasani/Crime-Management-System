<?php

session_start();

?>

<!doctype HTML>
<html>
<head>
<meta charset="utf-8">
    <title>My Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.js"></script>
<style>
body{
  background: #ffcc66;
}


</style>

	</head>
<body>

<div id="content">
<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("project",$conn);

$user = $_SESSION['username'];
$cid = $_GET['cid'];

if(isset($_SESSION['uid']))
{
	$logged = "| <a href='create_topic.php?cid=".$cid."'>Click to create a topic</a>";
} 
else
{
	$logged = " | Please login to create topic in this forum.";
}

$sql = "select id from catagories where id='".$cid."' LIMIT 1";
$res = mysql_query($sql) or die(mysql_error());
$topics ="";
if(mysql_num_rows($res) == 1)
{
	$sql2 = "select * from topics where catagory_id='".$cid."' order by topic_reply_date DESC";
	$res2 = mysql_query($sql2) or die(mysql_error());
	if(mysql_num_rows($res2) > 0)
	{
		$topics .= "<table width='100%' style='border-collapse: collapse;'>";
		$topics .= "<tr><td colspan='3'><a href='forum.php'>Return to index</a>".$logged."<hr /></td></tr>";
		$topics .= "<tr style='background-color: #ffff99;'><td>Topic Title</td><td width='65' align='center'>Replies</td><td width='65'
		align='center'>Views</td><tr>";
		$topics .= "<tr><td colspan='3'><hr /><td><tr>";
		while($row = mysql_fetch_assoc($res2))
		{
			$tid = $row['id'];
			$title = $row['topic_title'];
			$views = $row['topic_views'];
			$reply = $row['topic_reply'];
			$date = $row['topic_date'];
			$creator = $row['topic_creator'];
			$topics .= "<tr style='background-color: #ffff99;'><td><a href='view_topic.php?cid=".$cid."&tid=".$tid."'>".$title."</a><br /><span class='post_info'>Posted by:
			".$user." on ".$date."</span></td><td align='center'>".$reply."</td><td align='center'>".$views."</td></tr>";
			$topics .= "<tr><td colspan='3'><hr /></td></tr>";
		}
		$topics .= "</table>";
		echo $topics;
		
	}
	else
	{
		echo "<a href='forum.php'> Return to forum index </a><br>";
		echo "<p>There are no topics in this catagory yet'.$logged.'</p>";


	}
}
else
{
	echo "<a href='forum.php'> Return to forum index </a><br>";
	echo "you are trying to view catagory that does not exists yet";	
}
?>

</div>
</body>
</html>
