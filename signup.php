<html>
<head>
<title>
signup
</title>
</head>
<body background="img/img4.JPG">
<?php 
session_start();
include("header1.php"); ?>
<br>
<br>
<br>
<br>
<br>
<center>
<form name="myForm" method="POST" action="register.php">
<br>
<br>
<h1 align=center style="color:white; background:black;"> User Signup </h1>
<br>
<h2 align="center" style="color:#dadde6;">&nbsp &nbsp Enter Username : &nbsp <input type="text" name="user" required> </h2>
<br>
<h2 align="center" style="color:#dadde6;">&nbsp &nbsp Enter Password : &nbsp <input type="password" name="pwd" required> </h2>
<br>


<br>
<center><input type="Submit" value="Signup" style="height:40; width:100;"></center>
</center>
</form>
</body>
</html>
