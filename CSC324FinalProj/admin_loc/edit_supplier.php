
<?php include 'header.php'; ?>

<?php

	if(isset($_GET) & !empty($_GET)){
		$id = $_GET['id'];
	}else{
		header('location: viewsupplier.php');
	}

	if(isset($_POST) & !empty($_POST)){
		$name = mysqli_real_escape_string($connection, $_POST['name']);
		$street = mysqli_real_escape_string($connection, $_POST['street']);
		$city = mysqli_real_escape_string($connection, $_POST['city']);
		$state = mysqli_real_escape_string($connection, $_POST['state']);
		$zip = mysqli_real_escape_string($connection, $_POST['zip']);
		$mobile = mysqli_real_escape_string($connection, $_POST['mobile']);

	

		$sql = "UPDATE supplier SET name='$name', street='$street', city='$city', state='$state', zip='$zip', mobile='$mobile' WHERE id = $id";
		$res = mysqli_query($connection, $sql);
		if($res){
			$smsg = "Supplier Updated";
		}else{
			$fmsg = "Failed to Update Supplier";
		}
	}
?>

	
<section id="content">
	<div class="content-blog daf">
		<div class="container">
                    
                    <div class="ddd col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Edit Supplier</h5>
                                <div class="card-body">
		<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
			<?php 	
				$sql = "SELECT * FROM supplier WHERE id=$id";
				$res = mysqli_query($connection, $sql); 
				$r = mysqli_fetch_assoc($res); 
			?>
			<form method="post" enctype="multipart/form-data">
			  <div class="form-group">
			  
			    <label for="name">Product Name</label>
			    <input type="text" class="form-control" name="name" id="Productname" placeholder="Product Name" value="<?php echo $r['name']; ?>">
			  </div>

			  <div class="form-group">
			    <label for="street">Product Price</label>
			    <input type="text" class="form-control" name="street" id="street" placeholder="Product Price" value="<?php echo $r['street']; ?>">
			  </div>
                            
                             <div class="form-group">
			    <label for="city">Product Price</label>
			    <input type="text" class="form-control" name="city" id="city" placeholder="Product Price" value="<?php echo $r['city']; ?>">
			  </div>
                         <div class="form-group">
			    <label for="state">Product Price</label>
			    <input type="text" class="form-control" name="state" id="state" placeholder="Product Price" value="<?php echo $r['state']; ?>">
			  </div>
                            
                            <div class="form-group">
			    <label for="zip">Product Price</label>
			    <input type="text" class="form-control" name="zip" id="zip" placeholder="Product Price" value="<?php echo $r['zip']; ?>">
			  </div>
                            
                             <div class="form-group">
			    <label for="mobile">Product Price</label>
			    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Product Price" value="<?php echo $r['mobile']; ?>">
			  </div>
                            <div class="col col-sm-10 col-lg-9 offset-sm-1 mmd offset-lg-0">
				  <button type="submit" class="btn btn-default btn-primary">Submit</button>
			</form>
			
		</div>
	</div>

</section>

