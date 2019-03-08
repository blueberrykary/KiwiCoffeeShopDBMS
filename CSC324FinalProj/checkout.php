<?php
	ob_start();
	session_start();
	require_once 'functions/functions.php';
	if(!isset($_SESSION['customer']) & empty($_SESSION['customer'])){
		header('location: login.php');
	}
include 'header3.php'; 
include 'nav.php'; 
$uid = $_SESSION['customerid'];
$cart = $_SESSION['cart'];

if(isset($_POST) & !empty($_POST)){
	if($_POST['agree'] == true){
		$fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
		$lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
		$address2 = filter_var($_POST['street'], FILTER_SANITIZE_STRING);
		$city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
		$state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
                $zip = filter_var($_POST['zip'], FILTER_SANITIZE_NUMBER_INT);
		$phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
		$payment = filter_var($_POST['payment'], FILTER_SANITIZE_STRING);
                
		$sql = "SELECT * FROM customerinfo WHERE uid=$uid";
		$res = mysqli_query($connection, $sql);
		$r = mysqli_fetch_assoc($res);
		$count = mysqli_num_rows($res);
		if($count == 1){
			//update data in usersmeta table
			$usql = "UPDATE customerinfo SET fname='$fname', lname='$lname', street='$street', city='$city', state='$state',  zip='$zip', mobile='$phone' WHERE uid=$uid";
			$ures = mysqli_query($connection, $usql) or die(mysqli_error($connection));
			if($ures){

				$total = 0;
				foreach ($cart as $key => $value) {
					//echo $key . " : " . $value['quantity'] ."<br>";
					$ordsql = "SELECT * FROM products WHERE id=$key";
					$ordres = mysqli_query($connection, $ordsql);
					$ordr = mysqli_fetch_assoc($ordres);

					$total = $total + ($ordr['price']*$value['quantity']);
				}

				echo $iosql = "INSERT INTO orders (uid, totalprice, orderstatus, paymentmode) VALUES ('$uid', '$total', 'Order Placed', '$payment')";
				$iores = mysqli_query($connection, $iosql) or die(mysqli_error($connection));
				if($iores){
					//echo "Order inserted, insert order items <br>";
					$orderid = mysqli_insert_id($connection);
					foreach ($cart as $key => $value) {
						//echo $key . " : " . $value['quantity'] ."<br>";
						$ordsql = "SELECT * FROM products WHERE id=$key";
						$ordres = mysqli_query($connection, $ordsql);
						$ordr = mysqli_fetch_assoc($ordres);

						$pid = $ordr['id'];
						$productprice = $ordr['price'];
						$quantity = $value['quantity'];


						$orditmsql = "INSERT INTO contains (pid, orderid, producthprice, pqty) VALUES ('$pid', '$orderid', '$productprice', '$quantity')";
						$orditmres = mysqli_query($connection, $orditmsql) or die(mysqli_error($connection));
						//if($orditmres){
							//echo "Order Item inserted redirect to my account page <br>";
						//}
					}
				}
				unset($_SESSION['cart']);
				header("location: my-account.php");
			}
		}else{
			//insert data in usersmeta table
			$isql = "INSERT INTO customerinfo (fname, lname, street, city, state, zip, mobile, uid) VALUES ('$fname', '$lname', '$street', '$city', '$state', '$zip', '$phone', '$uid')";
			$ires = mysqli_query($connection, $isql) or die(mysqli_error($connection));
			if($ires){

				$total = 0;
				foreach ($cart as $key => $value) {
					//echo $key . " : " . $value['quantity'] ."<br>";
					$ordsql = "SELECT * FROM products WHERE id=$key";
					$ordres = mysqli_query($connection, $ordsql);
					$ordr = mysqli_fetch_assoc($ordres);

					$total = $total + ($ordr['price']*$value['quantity']);
				}

				echo $iosql = "INSERT INTO orders (uid, totalprice, orderstatus, paymentmode) VALUES ('$uid', '$total', 'Order Placed', '$payment')";
				$iores = mysqli_query($connection, $iosql) or die(mysqli_error($connection));
				if($iores){
					//echo "Order inserted, insert order items <br>";
					$orderid = mysqli_insert_id($connection);
					foreach ($cart as $key => $value) {
						//echo $key . " : " . $value['quantity'] ."<br>";
						$ordsql = "SELECT * FROM products WHERE id=$key";
						$ordres = mysqli_query($connection, $ordsql);
						$ordr = mysqli_fetch_assoc($ordres);

						$pid = $ordr['id'];
						$productprice = $ordr['price'];
						$quantity = $value['quantity'];


						$orditmsql = "INSERT INTO contains (pid, orderid, producthprice, pqty) VALUES ('$pid', '$orderid', '$productprice', '$quantity')";
						$orditmres = mysqli_query($connection, $orditmsql) or die(mysqli_error($connection));
						//if($orditmres){
							//echo "Order Item inserted redirect to my account page <br>";
						//}
					}
				}
				unset($_SESSION['cart']);
				header("location: my-account.php");
			}

		}
	}

}

$sql = "SELECT * FROM customerinfo WHERE uid=$uid";
$res = mysqli_query($connection, $sql);
$r = mysqli_fetch_assoc($res);
?>

	<!-- SHOP CONTENT -->
	<section id="content">
		<div class="content-blog">
					<div class="page_header text-center">
						<h2>Check Out</h2>
						
					</div>
<form method="post">
<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="billing-details">
						<h3 class="uppercase">Billing Details</h3>
						<div class="space30"></div>
							
							
							
							
								
						
							<div class="clearfix space20"></div>
							<div class="row">
								<div class="col-md-6">
									<label>First Name </label>
									<input name="fname" class="form-control" placeholder="" value="<?php if(!empty($r['fname'])){ echo $r['fname']; } elseif(isset($fname)){ echo $fname; } ?>" type="text">
								</div>
								<div class="col-md-6">
									<label>Last Name </label>
									<input name="lname" class="form-control" placeholder="" value="<?php if(!empty($r['lname'])){ echo $r['lname']; }elseif(isset($lname)){ echo $lname; } ?>" type="text">
								</div>
							</div>
							<div class="clearfix space20"></div>
							
							<label>Address </label>
							<input name="street" class="form-control" placeholder="Street address" value="<?php if(!empty($r['street'])){ echo $r['street']; } elseif(isset($street)){ echo $street; } ?>" type="text">
							<div class="clearfix space20"></div>
		
							<div class="row">
								<div class="col-md-4">
									<label>City </label>
									<input name="city" class="form-control" placeholder="City" value="<?php if(!empty($r['city'])){ echo $r['city']; }elseif(isset($city)){ echo $city; } ?>" type="text">
								</div>
								<div class="col-md-4">
									<label>State</label>
									<input name="state" class="form-control" placeholder="state" value="<?php if(!empty($r['state'])){ echo $r['state']; }elseif(isset($state)){ echo $state; } ?>" type="text">
								</div>
								<div class="col-md-4">
									<label>Postcode </label>
									<input name="zipcode" class="form-control" placeholder="Postcode / Zip" value="<?php if(!empty($r['zip'])){ echo $r['zip']; }elseif(isset($zip)){ echo $zip; } ?>" type="text">
								</div>
							</div>
							<div class="clearfix space20"></div>
							<label>Phone </label>
							<input name="phone" class="form-control" id="billing_phone" placeholder="" value="<?php if(!empty($r['mobile'])){ echo $r['mobile']; }elseif(isset($phone)){ echo $phone; } ?>" type="text">
						
					</div>
				</div>
				
			</div>
			
			<div class="space30"></div>
			<h4 class="heading">Your order</h4>
                        
                        
                        <?php
					//print_r($cart);
				$total = 0;
					foreach ($cart as $key => $value) {
						//echo $key . " : " . $value['quantity'] ."<br>";
						$cartsql = "SELECT * FROM products WHERE id=$key";
						$cartres = mysqli_query($connection, $cartsql);
						$cartr = mysqli_fetch_assoc($cartres);

					
				 ?>
			
			<table class="table table-bordered extra-padding">
				<tbody>
                                    
                                    <?php 
					$total = $total + ($cartr['price']*$value['quantity']);
				} ?>
					<tr>
						<th>Cart Subtotal</th>
						<td><span class="amount">$ <?php echo $total; ?></span></td>
					</tr>
					
					<tr>
						<th>Order Total</th>
						<td><strong><span class="amount">$ <?php echo $total; ?></span></strong> </td>
					</tr>
				</tbody>
			</table>
			
			<div class="clearfix space30"></div>
			<h4 class="heading">Payment Method</h4>
			<div class="clearfix space20"></div>
			
			<div class="payment-method">
				<div class="row">
					
						<div class="col-md-4">
							<input name="payment" id="radio1" class="css-checkbox" type="radio" value="Cash"><span>Cash</span>
							<div class="space20"></div>
							<p>In Store Payment</p>
						</div>
						<div class="col-md-4">
							
						</div>
						<div class="col-md-4">
                                                    <input name="payment" id="radio3" class="css-checkbox" type="radio" value="Credit"><span value="paypal">Credit Card </span>
							<div class="space20"></div>
							<p>Pay with Credit Card. We accept VISA, MASTERCARD, and EXPRESS.</p>
						</div>
					
				</div>
				<div class="space30"></div>
				
					<input name="agree" id="checkboxG2" class="css-checkbox" type="checkbox" value="true"><span>I've read and accept the <a href="#">terms &amp; conditions</a></span>
				
				<div class="space30"></div>
				<input type="submit" class="button btn-lg" value="Pay Now">
			</div>
		</div>		
</form>		
		</div>
	</section>
	
<?php include 'footer2.php' ?>
