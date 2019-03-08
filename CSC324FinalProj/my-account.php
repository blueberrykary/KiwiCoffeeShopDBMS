<?php 
	ob_start();
	session_start();
	require_once 'functions/functions.php';
	if(!isset($_SESSION['customer']) & empty($_SESSION['customer'])){
		header('location: login.php');
	}
include 'header2.php'; 
include 'nav.php'; 
$uid = $_SESSION['customerid'];
 $cart=[ ];
                     if(isset($_SESSION['cart'])){
                        $cart= $_SESSION['cart'];
                    }
?>
	
	<!-- SHOP CONTENT -->
	<section id="content">
		<div class="content-blog content-account">
			<div class="container">
				<div class="row">
					<div class="page_header text-center">
						
					</div>
					<div class="col-md-12">

			<h3>Recent Orders</h3>
			<br>
			<table class="cart-table account-table table">
				<thead>
					<tr>
						<th>Order</th>
						<th>Date</th>
						<th>Status</th>
						<th>Payment Mode</th>
						<th>Total</th>
						<th></th>
					</tr>
				</thead>
				<tbody>

				<?php
					$ordsql = "SELECT * FROM orders WHERE uid='$uid'";
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
						<td>
                                                    <a href="view-order.php?id=<?php echo $ordr['id']; ?>"><i class="fa fa-eye"></i></a>
							<?php if($ordr['orderstatus'] != 'Cancelled'){?>
							| <a href="cancel-order.php?id=<?php echo $ordr['id']; ?>"><i class="fa fa-close"></i></a>
							<?php } ?>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>		

			<br>
			<br>
			<br>

			<div class="ma-address">
						

			<div class="row">
				<div class="col-md-6">
								<h4>My Address <a href="edit-address.php">Edit</a></h4>
					<?php
						$csql = "SELECT u1.fname, u1.lname, u1.street, u1.city, u1.state, u1.zip, u.email, u1.mobile FROM customer u JOIN customerinfo u1 WHERE u.id=u1.uid AND u.id=$uid";
						$cres = mysqli_query($connection, $csql);
						if(mysqli_num_rows($cres) == 1){
							$cr = mysqli_fetch_assoc($cres);
							echo "<p>".$cr['fname'] ." ". $cr['lname'] ."</p>";
							echo "<p>".$cr['street'] ."</p>";
							echo "<p>".$cr['city'] ."</p>";

							echo "<p>".$cr['state'] ."</p>";
							echo "<p>".$cr['zip'] ."</p>";
							echo "<p>".$cr['mobile'] ."</p>";
							echo "<p>".$cr['email'] ."</p>";
						}
					?>
				</div>

				<div class="col-md-6">

				</div>
			</div>



			</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	
<?php include 'footer2.php' ?>
