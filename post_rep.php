<?php
session_start();

if($_SESSION['uid'])
{
	if(isset($_POST['reply_submit']))
	{
		$conn = mysql_connect("localhost","root","");
		$db = mysql_select_db("project",$conn);

		$creator = $_SESSION['uid'];
		$cid = $_POST['cid'];
		$tid = $_POST['tid'];
		$reply_content = $_POST['reply_content']; 
		$sql = "insert into post (catagory_id, topic_id, post_creator, post_content, post_date) values ('".$cid."', '".$tid."'
				,'".$creator."', '".$reply_content."', now())";
		$res = mysql_query($sql) or die(mysql_error());
		$sql2 = "update catagories set last_post_date=now(), last_user_posted='".$creator."' where id='".$cid."' LIMIT 1";
		$res2 = mysql_query($sql2) or die(mysql_error());
		$sql3 = "update topics set topic_reply_date=now(), topic_last_user='".$creator."' where id='".$tid."' LIMIT 1";
		$res3 = mysql_query($sql3) or die(mysql_error());

		$sql5 = "select * from topics where catagory_id='".$cid."' and id='".$tid."' LIMIT 1";
		$res5 = mysql_query($sql5) or die(mysql_error());

		while($row5 = mysql_fetch_assoc($res5))
		{
		 	$old_reply = $row5['topic_reply'];
			$new_reply = $old_reply + 1;
			$sql6 = "update topics set topic_reply='".$new_reply."' where catagory_id='".$cid."' and id='".$tid."' LIMIT 1";
			$res6 = mysql_query($sql6) or die(mysql_error());

			}




		 
		 
		if(($res) && ($res2) && ($res3))
		{
			echo "<p>Your reply has been successfully posted. <a href='view_topic.php?cid=".$cid."&tid=".$tid."'>Click here to return to the topic.</a></p>";
		}
		else
		{
			echo "<p> there was a problem posting your reply. try again later.</p>";
		}

	}
	else
	{

	}
}
else
{

}
?>
