<?php
require('config.php');
echo $id=$_REQUEST['id'];
$query="delete from admin where user_id=$id";
$sql=mysqli_query($con,$query);
if($sql){
echo"<script>alert('user deleted success');
 window.location.href='user.php';
</script>";}
?>