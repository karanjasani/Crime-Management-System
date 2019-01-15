<?php

session_start();

if(isset($_SESSION['username']))
{
  $loged = "fill the form to register complain"; 
}
else
{
  header("location: index.php");
} 
?>

<html>
<head>
	<title>complain form</title>
	<style>
h1{
  text-align: center;
}

div{
  margin-left: 450px;

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
      <h1> COMPLAIN FORM </h1>
<div>
  <table>
<form action="complain.php"  method="POST">
  <tr>
  <td>VICTIM NAME:</td>
  <td><input type="text" name="vn"></td>
  </tr>
  <tr>
  <td>AGE :</td>
  <td><input type="NUMBER" name="va"></td>
  </tr>
  <tr>
  <td>ADDRESS    :</td>
  <td><input type="text" name="vadd"></td>
  </tr>
  <tr>
  <td>PLACE OF CRIME    :</td>
  <td><input type="text" name="cadd"></td>
  </tr>
  <tr>
  <td>TIME OF CRIME    :</td>
  <td><input type="text" name="ct"></td>
  </tr>
  <tr>
  <td>TYPE OF CRIME    :</td>
  <td><input type="radio" name="cty" value="rape">Rape
  	  <input type="radio" name="cty" value="theaft">Theaft
  	  <input type="radio" name="cty" value="child labour">Child labour
  	  <!--<input type="radio" name="cty" value="others">Others</td>	-->
  </tr>
  <!--<tr>
  <td>MENTION IF OTHER    :*</td>
  <td><input type="text" name="cd"></td>
  </tr>--> 
  <tr>
  <td>COMPLAIN TO    :</td>
  <td><input type="radio" name="cto" value="police">Police
  	  <input type="radio" name="cto" value="ngo">NGO
  </tr>
  <tr>
  <td>DESCRIBE CRIME    :</td>
  <td><textarea name="cdes" rows="5" cols="50"></textarea></td>
  </tr>
  <!--<tr>
  <td>PROOF IF ANY (IMAGES,DOCUMENT,ETC)    :</td>
  <td><input type="file" name="p"></td>
  </tr>-->

  <tr>
  <td><input type="submit" name="submit" value="register"></td>
  </tr>
</form>
</body>
</head>
</html>