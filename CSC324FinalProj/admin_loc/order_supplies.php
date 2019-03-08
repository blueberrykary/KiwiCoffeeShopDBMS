<!--Adding supplier with add_supplier at header!!-->


<?php

	if(isset($_POST) & !empty($_POST)){
		$sid = mysqli_real_escape_string($connection, $_POST['sid']);
                $pid = mysqli_real_escape_string($connection, $_POST['pid']);
                $qty = mysqli_real_escape_string($connection, $_POST['qty']);
               
                
		$sql = "INSERT INTO supplies (sid, pid, qty) VALUES ('$sid','$pid','$qty')";
		$res = mysqli_query($connection, $sql);
		if($res){
			$smsg = "Order Added";
		}else{
			$fmsg = "Failed to add Order";
		}
	}
?>

<section id="content">
	<div class="content-blog dsa">
		<div class="container">
                    
                    <div class="ddd col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Supplies</h5>
                                <div class="card-body">
		<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
			<form method="post">
			  <div class="form-group">
			    <label for="Productname">Name</label>
			    <input type="text" class="form-control" name="sid" id="sid" placeholder="Supplier ID">
			  </div>
                            
                            <div class="form-group">
			    <label for="Productname">Last Name</label>
			    <input type="text" class="form-control" name="pid" id="pid" placeholder="Product ID">
			  </div>
                            
                            <div class="form-group">
			    <label for="Productname">City</label>
			    <input type="text" class="form-control" name="qty" id="qty" placeholder="Quantity">
			  </div>
                            
		   <div class="col col-sm-10 col-lg-9 offset-sm-1 mmd offset-lg-0">
			  <button type="submit" class="btn btn-default btn-primary">Submit</button>
			</form>
			
		</div>
	</div>

</section>
