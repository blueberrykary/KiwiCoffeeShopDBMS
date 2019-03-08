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
 $cart=[ ];
                     if(isset($_SESSION['cart'])){
                        $cart= $_SESSION['cart'];
                    }

if(isset($_POST) & !empty($_POST)){
		
		$fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
		$lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
		
		$street = filter_var($_POST['street'], FILTER_SANITIZE_STRING);
		
		$city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
		$state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
		$phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
		
		$zip = filter_var($_POST['zipcode'], FILTER_SANITIZE_NUMBER_INT);

			$usql = "UPDATE customerinfo SET  fname='$fname', lname='$lname', street='$street', city='$city', state='$state',  zip='$zip', mobile='$phone' WHERE uid=$uid";
			$ures = mysqli_query($connection, $usql) or die(mysqli_error($connection));
			if($ures){

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
						
					</div>
<form method="post">
<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="billing-details">
						<h3 class="uppercase">Update My Address</h3>

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
							
							<div class="clearfix space20"></div>
							<label>Address </label>
							<input name="street" class="form-control" placeholder="Street Address" value="<?php if(!empty($r['street'])){ echo $r['street']; } elseif(isset($street)){ echo $street; } ?>" type="text">
							<div class="clearfix space20"></div>
							
							<div class="clearfix space20"></div>
							<div class="row">
								<div class="col-md-4">
									<label>City </label>
									<input name="city" class="form-control" placeholder="City" value="<?php if(!empty($r['city'])){ echo $r['city']; }elseif(isset($city)){ echo $city; } ?>" type="text">
								</div>
								<div class="col-md-4">
									<label>State </label>
									<input name="state" class="form-control" placeholder="State" value="<?php if(!empty($r['state'])){ echo $r['state']; }elseif(isset($state)){ echo $state; } ?>" type="text">
								</div>
								<div class="col-md-4">
									<label>Postcode </label>
									<input name="zipcode" class="form-control" placeholder="Postcode / Zip" value="<?php if(!empty($r['zip'])){ echo $r['zip']; }elseif(isset($zip)){ echo $zip; } ?>" type="text">
								</div>
							</div>
							<div class="clearfix space20"></div>
							<label>Phone </label>
							<input name="phone" class="form-control" id="billing_phone" placeholder="(XXX)XXX-XXXX" value="<?php if(!empty($r['mobile'])){ echo $r['mobile']; }elseif(isset($phone)){ echo $phone; } ?>" type="text">
						<div class="space30"></div>
					<input type="submit" class="button btn-lg" value="Update Address">
					</div>
				</div>
				
			</div>
		
		</div>		
</form>		
		</div>
	</section>
	
<?php include 'footer2.php' ?>
