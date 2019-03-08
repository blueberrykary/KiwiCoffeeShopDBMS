


<?php include 'header.php' ?>



<?php


	if(isset($_GET) & !empty($_GET)){
		$id = $_GET['id'];
	}else{
		header('location: products.php');
	}

	if(isset($_POST) & !empty($_POST)){
		$prodname = mysqli_real_escape_string($connection, $_POST['productname']);
		$description = mysqli_real_escape_string($connection, $_POST['productdescription']);
		$category = mysqli_real_escape_string($connection, $_POST['productcategory']);
		$price = mysqli_real_escape_string($connection, $_POST['productprice']);

		if(isset($_FILES) & !empty($_FILES)){
			$name = $_FILES['productimage']['name'];
			$size = $_FILES['productimage']['size'];
			$type = $_FILES['productimage']['type'];
			$tmp_name = $_FILES['productimage']['tmp_name'];

			$max_size = 10000000;
			$extension = substr($name, strpos($name, '.') + 1);

			if(isset($name) && !empty($name)){
				if(($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" && $size<=$max_size){
					$location = "imgs/";
					$filepath = $location.$name;
					if(move_uploaded_file($tmp_name, $filepath)){
						$smsg = "Uploaded Successfully";
					}else{
						$fmsg = "Failed to Upload File";
					}
				}else{
					$fmsg = "Only JPG files are allowed and should be less that 1MB";
				}
			}else{
				$fmsg = "Please Select a File";
			}
		}else{
			$filepath = $_POST['filepath'];
		}	

		$sql = "UPDATE products SET name='$prodname', description='$description', catid='$category', price='$price', thumb='$filepath' WHERE id = $id";
		$res = mysqli_query($connection, $sql);
		if($res){
			$smsg = "Product Updated";
		}else{
			$fmsg = "Failed to Update Product";
		}
	}
?>



           
<section id="content">
	<div class="content-blog eeffdd">
		<div class="container">
                    
                    <div class="ddd col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Edit Products</h5>
                                <div class="card-body">
                                    <table class="table table-striped">
                    
                    
                    
                    
		<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
			<?php 	
				$sql = "SELECT * FROM products WHERE id=$id";
				$res = mysqli_query($connection, $sql); 
				$r = mysqli_fetch_assoc($res); 
			?>
			<form method="post" enctype="multipart/form-data">
			  <div class="form-group ges">
			  <input type="hidden" name="filepath" value="<?php echo $r['thumb']; ?>">
			    <label for="Productname">Product Name</label>
			    <input type="text" class="form-control" name="productname" id="Productname" placeholder="Product Name" value="<?php echo $r['name']; ?>">
			  </div>
			  <div class="form-group ges">
			    <label for="productdescription">Product Description</label>
			    <textarea class="form-control" name="productdescription" rows="3"><?php echo $r['description']; ?></textarea>
			  </div>

			  <div class="form-group ges">
			    <label for="productcategory">Product Category</label>
			    <select class="form-control" id="productcategory" name="productcategory">
			    <?php 	
					$catsql = "SELECT * FROM category";
					$catres = mysqli_query($connection, $catsql); 
					while ($catr = mysqli_fetch_assoc($catres)) {
				?>
					<option value="<?php echo $catr['id']; ?>" <?php if( $catr['id'] == $r['catid']){ echo "selected"; } ?>><?php echo $catr['name']; ?></option>
				<?php } ?>
				</select>
			  </div>
			  

			  <div class="form-group ges">
			    <label for="productprice">Product Price</label>
			    <input type="text" class="form-control" name="productprice" id="productprice" placeholder="Product Price" value="<?php echo $r['price']; ?>">
			  </div>
			  <div class="form-group ges">
			    <label for="productimage">Product Image</label>
			    <?php if(isset($r['thumb']) & !empty($r['thumb'])){ ?>
			    <br>
			    	<img src="<?php echo $r['thumb'] ?>" class="imgedit" width="100px" height="100px">
                                <a href="delproimg.php?id=<?php echo $r['id']; ?>" class="ediit">Delete Image</a>
			    <?php }else{ ?>
			    <input type="file" name="productimage" id="productimage">
			    <p class="help-block">Only jpg/png are allowed.</p>
			    <?php } ?>
			  </div>
                            
			   <div class="col col-sm-10 col-lg-9 offset-sm-1 mmd offset-lg-0">
                               <button type="submit" class="btn btn-default btn-space btn-primary">Submit</button></div>
			</form>
			
		</div>
	</div>
                                 </div>
                            </div>
                        </div>


</section>
