<?php session_start();
if ($_SESSION['kiran']!=""){
?>
<?php include('header.php'); ?>
<?php include('nav.php'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
		<?php include('breadcrumb.php'); ?>
      <!-- Icon Cards-->
        <div class="row">
        <?php echo $_SESSION['kiran'];?>
		</div>
    <!-- /.container-fluid-->
	</div>
	<?php include('footer.php'); ?>
  </div>
  
<?php }

else{
	
	echo"error";
}?>
   <!-- /.content-wrapper-->
   