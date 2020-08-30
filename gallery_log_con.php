<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body{
			background-image: url(bgn1.jfif);
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
}

img:hover{
	transform: scale(2,2);
	transition: .3s transform;
}
	</style>
</head>
<body>
<pre>
	<center>
<form action="#" method="post" enctype="multipart/form-data">
	<input type="file" name="gallery[]" value="choose file" multiple="multiple"/>
	<input type="submit" name="submit">
</form>
</center>
</pre>
	<?php
	require_once('connection.php');
	if(isset($_POST['submit'])){
		$filename=$_FILES['gallery']['name'];
		$tmpname=$_FILES['gallery']['tmp_name'];
		$filetype=$_FILES['gallery']['type'];
		for($i=0; $i<=count($tmpname)-1; $i++){
			$name=addslashes($filename[$i]);
			$tmp=addslashes(file_get_contents($tmpname[$i]));
			mysql_query("INSERT into img(name,image) values('$name','$tmp')");
		}
	}
	$res=mysql_query("SELECT * from gallery");
	while ($row=mysql_fetch_array($res)) {
		echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="250" height="250">';
	}
	?>

</body>
</html>