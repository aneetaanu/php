<?php
session_start();
require('config.php');
	$uname=$_GET['uname'];
	$pwd=$_GET['pwd'];
echo $query="select * from admin where email='$uname' and password='$pwd'";
$sql=mysqli_query($con,$query);
 if(mysqli_num_rows($sql)>0){
	
	$_SESSION['kiran']=$uname;
	$_SESSION['pass']=$pwd;
	$uname=md5($uname);
	setcookie('sidhu',$uname,time()+ 86400*30,'/');
	 header('location:dashboard.php');
 }
 else{
	
	header('location:index.php');
 }
?>