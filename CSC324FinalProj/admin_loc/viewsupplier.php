<!--Viewing the supplier!!-->


 <div class="marg dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Supplier</h2>
                            <p class="pageheader-text"></p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="Admin1.php?dashboard" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="Admin1.php?view_supplier" class="breadcrumb-link">Supplier</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">View Supplier</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
<section id="content">
	<div class="content-blog">
		<div class="container">
				<div class="ddd col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Supplier</h5>
                                <div class="card-body">
                                    <table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Street</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Zip Code</th>
                                                <th>Mobile</th>
                                                <th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php 	
					$sql = "SELECT * FROM supplier";
					$res = mysqli_query($connection, $sql); 
                                        $i=0;
					while ($r = mysqli_fetch_assoc($res)) {
                                            $i++;
				?>
					<tr>
						<th scope="row"><?php echo $r['id']; ?></th>
						<td><?php echo $r['name']; ?></td>
                                                <td><?php echo $r['street']; ?></td>
                                                <td><?php echo $r['city']; ?></td>
                                                 <td><?php echo $r['state']; ?></td>
                                                  <td><?php echo $r['zip']; ?></td>
                                                   <td><?php echo $r['mobile']; ?></td>
                                                   <td><a href="edit_supplier.php?id=<?php echo $r['id']; ?>"><i class="far fa-edit"></i></a> | <a href="delsupplier.php?id=<?php echo $r['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			
		</div>
	</div>

</section>

