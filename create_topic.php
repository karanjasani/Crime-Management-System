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

?>

<!doctype HTML>
<html>
<head>
<meta charset="utf-8">
    <title>Create Topic</title>
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
<form action="create_top.php" method="POST">
	<p>Topic Title</p>
	<input type="text" name="topic_title" size="98" maxlength="150" />
	<p>Topic Content</p>
	<textarea name="topic_content" rows="5" cols="75"></textarea><br><br>
	<input type="hidden" name="cid" value="<?php echo $cid; ?>" />
	<input type="submit" name="topic_submit" value="create your topic" />
</form>

</div>
</body>
</html>
