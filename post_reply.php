<?php

session_start();

?>
<?php
if((!isset($_SESSION['uid'])) || ($_GET['cid'] == ""))
{
	header("location: forum.php");
	exit();
}

$cid = $_GET['cid'];
$tid = $_GET['tid'];
?>

<!doctype HTML>
<html>
<head>
<meta charset="utf-8">
    <title>Post Reply</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.js"></script>

</head>

	
<body>
<?php

echo "<p>You are logged in as ".$_SESSION['username']. " <a href='logout.php'>Logout</a>";

?>


<div id="content">

<form action="post_rep.php" method="post">
<p>Reply Content</p>
<textarea name="reply_content" rows="5" cols="75"></textarea>
<br><br>
<input type="hidden" name="cid" value="<?php echo $cid; ?>" />
<input type="hidden" name="tid" value="<?php echo $tid; ?>" />
<input type="submit" name="reply_submit" value="Post Your Reply" />
</form>
</div>
</body>
</html>
