<?php require('config.php');?>
<html>
<head>
<style>
.pic{
	width:200px;
	height:200px;
}
</style>
</head>
<body>
<form enctype="multipart/form-data" action="upload.php" method="POST">
    
    Send this file: <input name="userfile" type="file" />
    <input type="submit" value="Send File" name='sub'/>
</form>

<?php
if(isset($_POST['sub'])){
	
	$upload='img/';
	echo $img=$_FILES['userfile']['name'];
	if(move_uploaded_file($_FILES['userfile']['tmp_name'],$upload.$img )){
		$query="insert into upload (image) values ('$upload$img')";
		mysqli_query($con,$query);
		
	}
	else{
		echo"error";
		
	}
}

?>
<table>
<?php
$query ='select * from upload';
$sql=mysqli_query($con,$query);
while($row=mysqli_fetch_array($sql)){
echo"<tr><td><img src='$row[1]' class='pic'></td><td><a href='delimg.php?php=$row[0]'>del</a>/<a href='updateimg.php?php=$row[0]'>edit</a></td></tr>";	
	
}
?>
</table>




</body>
</html>







