 <?php 
$con=mysqli_connect('localhost','root','','batch10-12');

if(isset($_POST['sub'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$gender=$_POST['gender'];
$course = implode(',', $_POST['course']);

$city=$_POST['city'];
$city2=implode(',', $_POST['city2']);
$pic=$_FILES['pic']['name'];
$uploaddir = 'pic/';
$uploadfile = $uploaddir . basename($_FILES['pic']['name']);
if (move_uploaded_file($_FILES['pic']['tmp_name'], $uploadfile)) {
   $sql="insert into admin(fname, lname, email,password,gender,course,city,city2,pic) values ('$fname','$lname','$email','$pwd','$gender','$course','$city','$city2','$pic')";
   mysqli_query($con,$sql);

echo"<script>alert('user added success');
 window.location.href='add_user.php';
</script>";
 }
 else {
    echo "error in insertion";
}
}
//header('location:add_user.php');
?>