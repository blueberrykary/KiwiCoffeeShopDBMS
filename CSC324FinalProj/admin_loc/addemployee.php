<?php

	if(isset($_POST) & !empty($_POST)){
		$fname = mysqli_real_escape_string($connection, $_POST['fname']);
                $lname = mysqli_real_escape_string($connection, $_POST['lname']);
                $email = mysqli_real_escape_string($connection, $_POST['email']);
                $password = mysqli_real_escape_string($connection, $_POST['password']);
		$sql = "INSERT INTO employee (fname, lname, email, password) VALUES ('$fname','$lname','$email','$password')";
		$res = mysqli_query($connection, $sql);
		if($res){
			$smsg = "Employee Added";
		}else{
			$fmsg = "Failed Add Employee";
		}
	}
?>

<section id="content">
    <div class="content-blog ads">
        <div class="container">

            <div class="ddd col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Add Employee</h5>
                    <div class="card-body">
                                   
		<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
			<form method="post">
			  <div class="form-group">
			    <label for="Productname">First Name</label>
			    <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
			  </div>
                            
                            <div class="form-group">
			    <label for="Productname">Last Name</label>
			    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
			  </div>
                            
                            <div class="form-group">
			    <label for="Productname">Email</label>
			    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
			  </div>
                            
                            <div class="form-group">
			    <label for="Productname">Password</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
			  </div>
			  <div class="col col-sm-10 col-lg-9 offset-sm-1 mmd offset-lg-0">
			  <button type="submit" class="btn btn-default btn-primary">Submit</button>
			</form>
			
		</div>
	</div>

</section>
