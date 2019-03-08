<?php
if (isset($_POST) & !empty($_POST)) {
    $prodname = mysqli_real_escape_string($connection, $_POST['productname']);
    $description = mysqli_real_escape_string($connection, $_POST['productdescription']);
    $category = mysqli_real_escape_string($connection, $_POST['productcategory']);
    $price = mysqli_real_escape_string($connection, $_POST['productprice']);


    if (isset($_FILES) & !empty($_FILES)) {
        $name = $_FILES['productimage']['name'];
        $size = $_FILES['productimage']['size'];
        $type = $_FILES['productimage']['type'];
        $tmp_name = $_FILES['productimage']['tmp_name'];

        $max_size = 10000000;
        $extension = substr($name, strpos($name, '.') + 1);

        if (isset($name) && !empty($name)) {
            if (($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" && $size <= $max_size) {
                $location = "imgs/";
                if (move_uploaded_file($tmp_name, $location . $name)) {
                    //$smsg = "Uploaded Successfully";
                    $sql = "INSERT INTO products (name, description, catid, price, thumb) VALUES ('$prodname', '$description', '$category', '$price', '$location$name')";
                    $res = mysqli_query($connection, $sql);
                    if ($res) {
                        //echo "Product Created";
                    } else {
                        $fmsg = "Failed to Create Product";
                    }
                } else {
                    $fmsg = "Failed to Upload File";
                }
            } else {
                $fmsg = "Only JPG files are allowed and should be less that 1MB";
            }
        } else {
            $fmsg = "Please Select a File";
        }
    } else {

        $sql = "INSERT INTO products (name, description, catid, price) VALUES ('$prodname', '$description', '$category', '$price')";
        $res = mysqli_query($connection, $sql);
        if ($res) {
            header('location: products.php');
        } else {
            $fmsg = "Failed to Create Product";
        }
    }
}
?>


<section id="content">
    <div class="content-blog eeffdd ">
        <div class="container">

            <div class="ddd col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Add Products</h5>
                    <div class="card-body">
                        <table class="table table-striped">
                            <?php if (isset($fmsg)) { ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
                            <?php if (isset($smsg)) { ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
                            <form method="post" enctype="multipart/form-data">
                                <div class="form-group ges">
                                    <label for="Productname">Product Name</label>
                                    <input type="text" class="form-control" name="productname" id="Productname" placeholder="Product Name">
                                </div>
                                <div class="form-group ges">
                                    <label for="productdescription">Product Description</label>
                                    <textarea class="form-control" name="productdescription" placeholder="Write text here..." rows="3"></textarea>
                                </div>

                                <div class="form-group ges">
                                    <label for="productcategory">Product Category</label>
                                    <select class="form-control" id="productcategory" name="productcategory">
                                        <option value="">Select Category</option>
                                        <?php
                                        $sql = "SELECT * FROM category";
                                        $res = mysqli_query($connection, $sql);
                                        while ($r = mysqli_fetch_assoc($res)) {
                                            ?>
                                            <option value="<?php echo $r['id']; ?>"><?php echo $r['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>


                                <div class="form-group ges">
                                    <label for="productprice">Product Price</label>
                                    <input type="text" class="form-control" name="productprice" id="productprice" placeholder="Product Price">
                                </div>
                                <div class="form-group ges ">
                                    <label for="productimage">Product Image</label>
                                    <input type="file" name="productimage" id="productimage">
                                    <p class="help-block">Only jpg are allowed.</p>
                                </div>
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 mmd offset-lg-0">
                                    <button type="submit" class="btn btn-default btn-space btn-primary">Submit</button>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

