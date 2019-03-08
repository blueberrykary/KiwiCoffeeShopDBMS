
 <div class="marg dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Products</h2>
                            <p class="pageheader-text"></p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="Admin1.php?dashboard" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="Admin1.php?products" class="breadcrumb-link">Products</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">View Products</li>
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
                                <h4 class="card-header">Products</h4>
                                <div class="card-body">
                                    <table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Product Name</th>
						<th>Category Name</th>
						<th>Thumbnail</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php 	
					$sql = "SELECT products.name, products.price, products.thumb, products.id, category.name AS catname FROM products INNER JOIN category ON products.catid = category.id ";
					$res = mysqli_query($connection, $sql); 
                                        $i=0;
					while ($r = mysqli_fetch_assoc($res)) {
                                           
                                            $i++;
                                            
                                            
				?>
					<tr>
                                                <td><?php echo $i;?></td>
						<td><?php echo $r['name']; ?></td>
						<td><?php echo $r['catname']; ?></td>
						<td><?php if($r['thumb']){ echo "Yes";}else{echo "No";} ?></td>
                                                <td><a href="editproduct.php?id=<?php echo $r['id']; ?>"><i class="far fa-edit"></i></a> | <a href="delproduct.php?id=<?php echo $r['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			
		</div>
	</div>
                             </div>
                            </div>
                        </div>

</section>



