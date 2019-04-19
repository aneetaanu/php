
<?php session_start();
if ($_SESSION['kiran']!=""){
 include('header.php'); ?>
<?php include('nav.php'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
		<?php // include('breadcrumb.php'); ?>
      <!-- Icon Cards-->
       <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Add user</div>
      <div class="card-body">
        <form action='add.php' method='post'  enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name" name='fname'>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name" name='lname'>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email" name='email'>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name='pwd'>
              </div>
             
            </div>
          </div>
		  <div class="form-group">
            <div class="form-row">
		  <div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
			  <label class="form-check-label" for="inlineRadio1">male</label>
			</div>
		<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
			  <label class="form-check-label" for="inlineRadio2">female</label>
		</div>
		</div>
		</div>
		<div class="form-group">
            <div class="form-row">
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="checkbox" name="course[]" value="php">
			<label class="form-check-label" for="php">php</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" name="course[]" value="mysql">
		  <label class="form-check-label" for="mysql">mysql</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" name="course[]" value="javascript">
		  <label class="form-check-label" for="javascript">javascript</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" name="course[]" value="bootstrap">
		  <label class="form-check-label" for="bootstrap">bootstrap</label>
		</div>
		</div>
		</div>
		<div class="form-group">
			<label for="city">city</label>
			<select class="form-control" id="city" name='city'>
			  <option value='mohali'>mohali</option>
			  <option value='chd'>chd</option>
			  <option value='barnala'>barnala</option>
			  <option value='jhj'>jhj</option>
			  <option value='bathinda'>bathinda</option>
			</select>
		  </div>
		  <div class="form-group">
			<label for="city2">Example multiple select</label>
			<select multiple class="form-control" id="city2" name='city2[]'>
			  <option value='mohali'>mohali</option>
			  <option value='chd'>chd</option>
			  <option value='barnala'>barnala</option>
			  <option value='jhj'>jhj</option>
			  <option value='bathinda'>bathinda</option>
			</select>
  </div>
		 <div class="form-group">
		<label for="exampleFormControlFile1">Example file input</label>
		<input type="file" class="form-control-file" id="exampleFormControlFile1" name='pic' multiple>
  </div>
          <div class="form-group">
            <label for="submituser"></label>
            <input class="form-control" id="submituser" type="submit" name='sub' >
          </div>
        </form>
       
      </div>
    </div>
    <!-- /.container-fluid-->
	</div>
	<?php include('footer.php'); ?>
  </div>
  <?php }

else{
	
	echo"error";
}?>