
<?php include 'header.php'; ?>

<?php

	if(isset($_GET) & !empty($_GET)){
		$id = $_GET['id'];
	}else{
		header('location: viewemployees.php');
	}

	if(isset($_POST) & !empty($_POST)){
		$fname = mysqli_real_escape_string($connection, $_POST['fname']);
		$lname = mysqli_real_escape_string($connection, $_POST['lname']);
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$password = mysqli_real_escape_string($connection, $_POST['password']);


	

		$sql = "UPDATE employee SET fname='$fname', lname='$lname', email='$email', password='$password' WHERE id = $id";
		$res = mysqli_query($connection, $sql);
		if($res){
			$smsg = "Employee Updated";
		}else{
			$fmsg = "Failed to Update Employee";
		}
	}
?>

	
<section id="content">
    <div class="content-blog dsd">
        <div class="container">

            <div class="ddd col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Add Employee</h5>
                    <div class="card-body">
		<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
			<?php 	
				$sql = "SELECT * FROM employee WHERE id=$id";
				$res = mysqli_query($connection, $sql); 
				$r = mysqli_fetch_assoc($res); 
			?>
			<form method="post" enctype="multipart/form-data">
			  <div class="form-group">
			  
			    <label for="name">First Name</label>
			    <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" value="<?php echo $r['fname']; ?>">
			  </div>

			  <div class="form-group">
			    <label for="street">Last Name</label>
			    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" value="<?php echo $r['lname']; ?>">
			  </div>
                            
                             <div class="form-group">
			    <label for="city">Email</label>
			    <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $r['email']; ?>">
			  </div>
                         <div class="form-group">
			    <label for="state">Password</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $r['password']; ?>">
			  </div>
                            
                             <div class="col col-sm-10 col-lg-9 offset-sm-1 mmd offset-lg-0">
			  <button type="submit" class="btn btn-default btn-primary">Submit</button>
			</form>
			
		</div>
	</div>

</section>

