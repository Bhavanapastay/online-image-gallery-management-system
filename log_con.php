<?php
require_once('connection.php');
$Email=$_POST['email'];
$Password=$_POST['pass'];

$sql="select * from registration where email='$Email' and pass='$Password'";

$rs=mysql_query($sql);
$row=mysql_fetch_array($rs);

if(empty($row))
{
	echo "login failed";
    exit(0);
}
else
{
	echo "login success";

}
?>
<!DOCTYPE html>
<html>
<head>
 <style>
body {
  font-family: "Lato", sans-serif;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.row {
  margin-left: 30px 40px;
  border-radius: 30%;
}

/* Add padding BETWEEN each column */
.row,
.row  .column {
  padding: 35px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 20%;
}
.column a{
  text-decoration:none;
  text-align: center;
}
.column a:visited{
  text-decoration:none;
  color: black;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
</head>
<body bgcolor="#D2B48C">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="Photographers.php">Photographers</a>
  <a href="public.php">Public Gallery</a>
  <a href="logout.php">Logout</a>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
  <center><h1>Mini World</h1>
  <h2><i><b>"You don't take a photograph, you make it"</b></i></h2>
</center>
<div class="row">
<div class="column"><a href="nature.html"><img src="nature.jpg" width="250" height="200"><br>Nature</a></div>
<div class="column"><a href="buildings.html"><img src="monum.jpg" width="250" height="200"><br>Buildings</a></div>
<div class="column"><a href="Vehicle.html"><img src="vehicle.jpg" width="250" height="200"><br>Vehicle</a></div>
<div class="column"><a href="monuments.html"><img src="monu.jpg" width="250" height="200"><br>Monuments</a></div>
<div class="column"><a href="food.html"><img src="food.jpg" width="250" height="200"><br>Food</a></div>
<div class="column"><a href="fastion.html"><img src="fashion.jpg" width="250" height="200"><br>Fashion</a></div>
<div class="column"><a href="baby.html"><img src="baby.jpg" width="250" height="200"><br>Baby</a></div>
<div class="column"><a href="traditional.html"><img src="Traditional.jpg" width="250" height="200"><br>Traditonal</a></div>
<div class="column"><a href="Temple.html"><img src="temple.jpg" width="250" height="200"><br>Temple</a></div>
<div class="column"><a href="Wildlife.html"><img src="animal.jpg" width="250" height="200"><br>Wild-Life</a></div>

</div>
  </div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</body>
</html>