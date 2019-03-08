
<?php include 'header.php'; ?>

<?php
if(isset($_POST) & !empty($_POST)){
		$status = filter_var($_POST['status'], FILTER_SANITIZE_STRING);
		$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
		$id = filter_var($_POST['orderid'], FILTER_SANITIZE_NUMBER_INT);

			echo $ordprcsql = "INSERT INTO status (orderid, status, message) VALUES ('$id', '$status', '$message')";
			$ordprcres = mysqli_query($connection, $ordprcsql) or die(mysqli_error($connection));
			if($ordprcres){
				$ordupd = "UPDATE orders SET orderstatus='$status' WHERE id=$id";
				if(mysqli_query($connection, $ordupd)){
					header('location: Admin1.php?orders');
				}
			}
}
?>



	<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
             <div class="col-xl-10">
                   <div class="row">

   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform"> 
                                    </div>
                                     <div class="card emx">
                                    <div class="card-body">
                    
                    
<form method="post">
<div class="container">
    <div class="form-group row">
                                            <div class="form-group">
					<div class="billing-details col-form-label">
						<h3 class="nn uppercase">Order Processing</h3>

				<div class="ddd col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Process Customer's Orders</h5>
                                <div class="card-body">
                                    <table class="table">
				<thead>
					<tr>
						<th>Order</th>
						<th>Date</th>
						<th>Status</th>
						<th>Payment Mode</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>

				<?php
					if(isset($_GET['id']) & !empty($_GET['id'])){
						$oid = $_GET['id'];
					}else{
						header('location: Admin1.php?orders');
					}
					$ordsql = "SELECT * FROM orders WHERE id='$oid'";
					$ordres = mysqli_query($connection, $ordsql);
					while($ordr = mysqli_fetch_assoc($ordres)){
				?>
					<tr>
						<td>
							<?php echo $ordr['id']; ?>
						</td>
						<td>
							<?php echo $ordr['timestamp']; ?>
						</td>
						<td>
							<?php echo $ordr['orderstatus']; ?>			
						</td>
						<td>
							<?php echo $ordr['paymentmode']; ?>
						</td>
						<td>
							$ <?php echo $ordr['totalprice']; ?>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>	

						<div class="space30"></div>
							<label class=""></label>
                                                          <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
                                 <div class="sidebar-nav-fixed">
                                     
                                            
							<select name="status" class="form-control list-unstyled m-r-20 jdf">
								<option value="">Select Status</option>
								<option value="In Progress">In Progress</option>
								<option value="Preparing">Preparing</option>
								<option value="Almost Done">Almost Done</option>
                                                                <option value="Ready-to-Go">Ready to Go</option>
                                                                <option value="Done">Done</option>
							</select>
                                 </div>
                                                          </div>

							<div class="clearfix space20"></div>
							<label>Note :</label>
							<textarea class="form-control" name="message" cols="10"> </textarea>
                                                        

					<input type="hidden" name="orderid" value="<?php echo $_GET['id']; ?>">		 
						<div class="space30"></div>
                                                <input type="submit" class="btn buttonmargin btn-primary m-b-50" value="Update Order Status">
					</div>
				</div>
				
			</div>
                                        </div></div></div></div>
		
		</div>		
</form>		
		</div>
	</section>
	