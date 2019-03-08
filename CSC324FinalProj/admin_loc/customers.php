<div class="marg dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Customers</h2>
                            <p class="pageheader-text"></p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="Admin1.php?dashboard" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="Admin1.php?customers" class="breadcrumb-link">Customers</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">View Customers</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
               

<section id="content">
	<div class="content-blog">
		<div class="container">
				<div class="ddd col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h4 class="card-header">Customers</h4>
                                <div class="card-body">
                                    <table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Mobile</th>
						<th>Email</th>
						<th>Time Joined</th>
					</tr>
				</thead>
				<tbody>
				<?php 	
					$sql = "SELECT * FROM customer u JOIN customerinfo u1 WHERE u.id=u1.uid";
					$res = mysqli_query($connection, $sql); 
					while ($r = mysqli_fetch_assoc($res)) {
				?>
					<tr>
						<th scope="row"><?php echo $r['id']; ?></th>
						<td><?php echo $r['fname'] . " " . $r['lname']; ?></td>
						<td><?php echo $r['mobile']; ?></td>
						<td><?php echo $r['email']; ?></td>
						<td><?php echo $r['timestamp']; ?></td>
						
				<?php } ?>
				</tbody>
			</table>
                                </div>
                            </div>
                                </div>
                </div>
			
		</div>
	</div>

</section>

