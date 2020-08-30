<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body{
	background-image: url(img2.jfif);
	background-size: cover;
	background-position: center;

}

main{
	margin-left: 120px;
}
.box{
	display: block;
	float: left;
	width: 5%;
	padding: 10px;
	padding-left: 20px;
}

img{
	width: 20%;
	border-radius: 8px;
	margin-left: 70px;
}

img:hover{
	transform: scale(2,2);
	transition: .2s transform;
}
	</style>
</head>
<body>
	<pre>
	<center>
<form action="#" method="post" enctype="multipart/form-data">
	<input type="file" name="img[]" value="choose file" multiple="multiple"/>
	<input type="submit" name="submit">
</form>
</center>
</pre>
	<?php
	require_once('connection.php');
	if(isset($_POST['submit'])){
		$filename=$_FILES['img']['name'];
		$tmpname=$_FILES['img']['tmp_name'];
		$filetype=$_FILES['img']['type'];
		for($i=0; $i<=count($tmpname)-1; $i++){
			$name=addslashes($filename[$i]);
			$tmp=addslashes(file_get_contents($tmpname[$i]));
			mysql_query("INSERT into img(name,image) values('$name','$tmp')");
			
		}
	}
	$res=mysql_query("SELECT * from img");
	while ($row=mysql_fetch_array($res)) {
		echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="250" height="250">';
	}
	?>


</body>
</html>
