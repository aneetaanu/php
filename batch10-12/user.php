<?php include('header.php'); ?>
<?php include('nav.php'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
		<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last name</th>
                  <th>Email</th>
                  <th>Password</th>
				  <th>gender</th>
                  <th>course</th>
                  <th>city</th>
                  <th>city2</th>
				  <th>doc</th>
                  <th>Edit/Delete</th>
                  
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>First Name</th>
                  <th>Last name</th>
                  <th>Email</th>
                  <th>Password</th>
				  <th>gender</th>
                  <th>course</th>
                  <th>city</th>
                  <th>city2</th>
				  <th>doc</th>
                  <th>Edit/Delete</th>
                  
                </tr>
              </tfoot>
              <tbody>
			  <?php 			  
			  $query='select * from admin';
			  $sql=mysqli_query($con,$query);
			  while($row=mysqli_fetch_array($sql)){ ?>
               <tr>
                  <td><?php echo $row[1]; ?></td>
                  <td><?php echo $row[2]; ?></td>
                  <td><?php echo $row[3]; ?></td>
                  <td><?php echo $row[4]; ?></td>
				  <td><?php echo $row[5]; ?></td>
                  <td><?php echo $row[6]; ?></td>
                  <td><?php echo $row[7]; ?></td>
				  <td><?php echo $row[8]; ?></td>
				  <td><embed src='pic/<?php echo $row[9]; ?>' width='200px' height='200px'></td>
                  <td>edit/<a href='del_user.php?id=<?php echo $row[0]; ?>'>delete</a></td>
			  </tr>              
			 <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
	<?php include('footer.php'); ?>