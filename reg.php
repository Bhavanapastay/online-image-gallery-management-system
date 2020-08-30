<!DOCTYPE html>
<html>
<head>
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
			height: 480px;
			background: #000;
			color: #fff;
			bottom: -15%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 5px 30px;
			background: rgba(0,0,0,0.5);
		}
		.avatar{
			width: 100px;
  			height: 100px;
  			border-radius: 50%;
 			position: absolute;
  			margin-top:-110px;
  			left: 36%;
		}
	    .login input[type="text"]
		{
			border: none;
			border-bottom:1px solid #fff;
			background:transparent;
			outline: none;
			height: 20px;
			color: #fff;
			font-size: 16px;
		}	
		.login input[type="password"], .login input[type="email"], .login input[type="tel"] 
		{
			border: none;
			border-bottom:1px solid #fff;
			background:transparent;
			outline: none;
			height: 20px;
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
		
</style>
</head>
<body>
	<div class="login">
		<img src="avatar.jpg" class="avatar">

	<center>
	<form action="reg_con.php" method="post">
	<label for="First_name"><b>First_name:</b></label>
	<input type="text" name="fname" required><br><br>
	<label for="Last_name"><b>Last_name:</b></label>
	<input  type="text" name="lname" required><br><br>
	 <label for="Email"><b>        Email:</b></label>
	<input  type="email" name="email" required><br><br>
	<label for="password"><b>password:</b></label>
	<input  type="password" name="password" required><br><br>
	<label for="gender"><b>gender:</b></label>
	<input  type="radio" name="gender" value="Male">Male
	<input  type="radio" name="gender" value="Female">Feamle<br><br>
	<label for="contact"><b>contact:</b></label>
	<input  type="tel" name="contact" required><br><br>
	<label for="Adderss"><b>Adderss:</b></label>
	<input  type="text" name="add" required><br><br>
	<label for="Country"><b>Country:</b></label>
	<input  type="text" name="country" required><br><br>
	<label for="State"><b>State:</b></label>
	<input  type="text" name="state" required><br><br>
	<input type="submit" name="Register" value="Register">
	<h3><p>Already Registered ?<a href="login.php">Login</a></p></h3>
	
	</form>
</center>
         </div>                              
</body>
</html>