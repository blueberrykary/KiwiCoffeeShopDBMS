<?php
//db connection
session_start();
require_once 'functions/functions.php'; 
?>
<html>
	<head>
		<title>Invoice generator</title>
	</head>
	<body>
		select invoice:
		<form method='get' action='invoice-db.php'>
			<select name='invoiceID'>
				<?php
					//show invoices list as options
					$query = mysqli_query($connection,"select * from orders");
					while($uid = mysqli_fetch_array($query)){
						echo "<option value='".$uid['uid']."'>".$uid['uid']."</option>";
					}
				?>
			</select>
			<input type='submit' value='Generate'>
		</form>
	</body>
</html>