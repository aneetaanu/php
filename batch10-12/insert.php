<?php 
$con=mysqli_connect('localhost','root','','batch10-12');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];

$sql="insert into admin(fname, lname, email,password) values ('$fname','$lname','$email','$pwd')";

mysqli_query($con,$sql);
 echo"<script>alert('user added success');
 window.location.href='add_user.php';
 </script>";
 
//header('location:add_user.php');
?>
