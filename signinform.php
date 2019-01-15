<html>
<head>
	<style>
h1{
	text-align: center;
}

div{
	margin-left: 550px;

}
body{

	background:#666666;
}
</style>
</head>
<body>
	<script>
function goback()
{
  window.history.back()
}
</script>
<input type="button" value="back" onclick="goback()">
	<h1> SIGNIN PAGE </h1>
<div>
<form action="signin.php"  method="POST">
  USER NAME:<input type="text" name="username"><br><br>
  PASSWORD :<input type="password" name="password"><br><br>
  <input type="submit" name="submit" value="login">
</form>
</div>
</body>
    </html>