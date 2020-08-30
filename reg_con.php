<?php
require_once('connection.php');

$First_name=$_POST['fname'];
$Last_name=$_POST['lname'];
$Email=$_POST['email'];
$Password=$_POST['password'];
$gender=$_POST['gender'];
$Contact=$_POST['contact'];
$Address=$_POST['add'];
$Country=$_POST['country'];
$State=$_POST['state'];
$sql="insert into registration values('$First_name','$Last_name','$Email','$Password','$gender','$Contact','$Address','$Country','$State')";
$rs=mysql_query($sql);
if(!$rs)
{
	echo "not inserted";
}
else 
{
	echo "inserted";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body{
			margin: 0;
			padding: 0;
		 	background: url(Pastel-Backgrounds.jpg);
			background-size: 170%;
			background-position: center;
			background-repeat: no-repeat;
			font-family: sans-serif;
		}
		.login{
			width: 370px;
			height: 420px;
			background: #000;
			color: #fff;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 5px 30px;
			background: rgba(0,0,0,0.5);
		}
		.log{
			width: 100px;
  			height: 100px;
  			border-radius: 50%;
 			position: absolute;
  			margin-top:-60px;
  			left: 36%;
		}
		.login p{
			padding: 0;
			margin: 0;
			font-weight: bold;
			font-size: 18px;
			color: #fff;
		} 
		.login input{
			width: 70%;
			margin-bottom: 20px;
		}

		.login input[type="text"], .login[type="password"]
		{
			border: none;
			border-bottom:1px solid #fff;
			background:transparent;
			outline: none;
			height: 40px;
			color: #fff;
			font-size: 16px;
		}
		.login input[type="submit"]
		{
			border: none;
			outline: none;
			height: 40px;
			font-size: 16px;
			color: #fff;
			background:rgb(255,38,126);
			cursor: pointer;
			border-radius: 20px; 
		}
		.login a{
			color: #fff;
			font-size: 15px;
			font-weight: bold;
		}
		.login input
		{
			width: 100%;
			padding: 10px 0;
			font-size: 15px;
			color: rgba(255,255,255,0.5);
			margin-bottom: 30px;
			border: none;
			border-bottom: 1px solid #fff;
			outline: none;
			background: transparent;
		}
	</style>
</head>
<body>
	<div class="login">
<img src="log1.jpg" class="log">
<form action="log_con.php" method="post">
<pre>



<p>Email</p>
<input type="Email" name="email" placeholder="Email" required>
<p>Password</p>
<input type="Password" name="pass" placeholder="password" required>
<center><input type="submit" name="" value="Login"></center>


</pre>

</form>
</div>
</body>
</html>