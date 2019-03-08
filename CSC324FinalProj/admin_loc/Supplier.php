<!--Adding supplier with add_supplier at header!!-->


<?php

	if(isset($_POST) & !empty($_POST)){
		$name = mysqli_real_escape_string($connection, $_POST['name']);
                $street = mysqli_real_escape_string($connection, $_POST['street']);
                $city = mysqli_real_escape_string($connection, $_POST['city']);
                $state = mysqli_real_escape_string($connection, $_POST['state']);
                $zip  = mysqli_real_escape_string($connection, $_POST['zip']);
                $mobile = mysqli_real_escape_string($connection, $_POST['mobile']);
		$sql = "INSERT INTO supplier (name, street, city, state, zip, mobile) VALUES ('$name','$street','$city','$state', '$zip', '$mobile')";
		$res = mysqli_query($connection, $sql);
		if($res){
			$smsg = "Supplier Added";
		}else{
			$fmsg = "Failed Add Supplier";
		}
	}
?>

<section id="content">
	<div class="content-blog cans">
		<div class="container">
                    
                    <div class="ddd col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Add Supplier</h5>
                                <div class="card-body">
		<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
			<form method="post">
			  <div class="form-group">
			    <label for="Productname">Name</label>
			    <input type="text" class="form-control " name="name" id="name" placeholder="Name">
			  </div>
                            
                            <div class="form-group ">
			    <label for="Productname">Last Name</label>
			    <input type="text" class="form-control " name="street" id="street" placeholder="Street">
			  </div>
                            
                            <div class="form-group">
			    <label for="Productname">City</label>
			    <input type="text" class="form-control " name="city" id="city" placeholder="City">
			  </div>
                            
                            <div class="form-group">
			    <label for="Productname">State</label>
			    <input type="text" class="form-control " name="state" id="state" placeholder="State">
			  </div>
                            
                             <div class="form-group">
			    <label for="Productname">Zip Code</label>
			    <input type="text" class="form-control " name="zip" id="state" placeholder="Zip Code">
			  </div>
                            
                             <div class="form-group">
			    <label for="Productname">Mobile Number</label>
			    <input type="text" class="form-control " name="mobile" id="mobile" placeholder="Mobile Number">
			  </div>
			  <div class="col col-sm-10 col-lg-9 offset-sm-1 mmd offset-lg-0">
			  <button type="submit" class="btn btn-default btn-primary">Submit</button>
			</form>
			
		</div>
	</div>

</section>
