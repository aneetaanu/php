<?php
require('config.php');
$id=$_REQUEST['php'];
$query="delete from upload where id=$id";
$sql=mysqli_query($con, $query);
if($sql)
{
	echo"image deleted";
	header('location:upload.php');
}
?>