<?php
require('config.php');
echo $id=$_REQUEST['php'];
echo $query="select * from upload where id=$id";
$sql= mysqli_query($con,$query);
$row=mysqli_fetch_row($sql);

?><form enctype="multipart/form-data" action="upload.php" method="POST">
    
    Send this file: <input name="userfile" type="file" value="<?php echo $row[1] ?>"/>
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