<?php
require_once('connection.php');
$ide=$_GET["id"];
mysql_query("delete from gallery where ide=$ide");
?>
