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
<script>
function goback()
{
  window.history.back()
}
</script>
</head>
    
    <body>
      <input type="button" value="back" onclick="goback()">
      <h1> SIGNUP PAGE </h1>
<div>
  <table>
<form action="signup.php"  method="POST">
  <tr>
  <td>USER NAME:</td>
  <td><input type="text" name="n"></td>
  </tr>
  <tr>
  <td>PASSWORD :</td>
  <td><input type="password" name="p"></td>
  </tr>
  <tr>
  <td>EMAIL    :</td>
  <td><input type="text" name="id"></td>
  </tr>
  <tr>
  <tr>
  <td><input type="submit" name="submit" value="Signup"></td>
</form>
</div>
</body>
    </html>