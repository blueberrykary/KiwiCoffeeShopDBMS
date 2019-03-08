
 <div class="marg dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Category</h2>
                            <p class="pageheader-text"></p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="Admin1.php?dashboard" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="Admin1.php?category" class="breadcrumb-link">Category</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">View Category</li>
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
                                <h5 class="card-header">Products</h5>
                                <div class="card-body">
                                    <table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Category Name</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				<?php 	
					$sql = "SELECT * FROM category";
					$res = mysqli_query($connection, $sql);
                                        $i=0;
					while ($r = mysqli_fetch_assoc($res)) {
                                            $i++;
				?>
					<tr>
                                                <th><?php echo $i;?></th>
						<td><?php echo $r['name']; ?></td>
                                                <td><a href="edit_categories.php?id=<?php echo $r['id']; ?>"><i class="far fa-edit"></i></a> | <a href="delcategory.php?id=<?php echo $r['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
                                </div>
                            </div>
                                </div>
                </div>
        </div>
		</div>
	</div>

              

</section>

