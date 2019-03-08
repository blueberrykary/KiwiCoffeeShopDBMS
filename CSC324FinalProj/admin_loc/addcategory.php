<?php

	if(isset($_POST) & !empty($_POST)){
		$name = mysqli_real_escape_string($connection, $_POST['categoryname']);
		$sql = "INSERT INTO category (name) VALUES ('$name')";
		$res = mysqli_query($connection, $sql);
		if($res){
			$smsg = "Category Added";
		}else{
			$fmsg = "Failed Add Category";
		}
	}
?>

<section id="content">
    <div class="content-blog ads">
        <div class="container">

            <div class="ddd col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Add Category</h5>
                    <div class="card-body">
                                   
		<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
			<form method="post">
			  <div class="form-group">
			    <label for="Productname">Category Name</label>
			    <input type="text" class="form-control" name="categoryname" id="Categoryname" placeholder="Category Name">
			  </div>
			  <div class="col col-sm-10 col-lg-9 offset-sm-1 mmd offset-lg-0">
			  <button type="submit" class="btn btn-default btn-space btn-primary">Submit</button>
			</form>
			
		</div>
	</div>

</section>
