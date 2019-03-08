<?php include 'header.php' ?>

<head>

    <style> fff{ margin-top: -900px;} </style>
</head>


<body>
    section id="content">
    <div class="content-blog neww">
        <div class="container">

            <div class="ddd col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">New Category</h5>
                    <div class="card-body">

                        <?php
                        if (isset($_GET) & !empty($_GET)) {
                            $id = $_GET['id'];
                        } else {
                            header('location: categories.php');
                        }

                        if (isset($_POST) & !empty($_POST)) {
                            $id = mysqli_real_escape_string($connection, $_POST['id']);
                            $name = mysqli_real_escape_string($connection, $_POST['categoryname']);
                            $sql = "UPDATE category SET name = '$name' WHERE id=$id";
                            $res = mysqli_query($connection, $sql);
                            if ($res) {
                                $smsg = "Category Updated";
                            } else {
                                $fmsg = "Failed Update Category";
                            }
                        }
                        ?>




                        <?php if (isset($fmsg)) { ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
                        <?php if (isset($smsg)) { ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
                        <form method="post">
                            <div class="form-group">

                                <label for="Productname">Category Name</label>
                                <?php
                                $sql = "SELECT * FROM category WHERE id=$id";
                                $res = mysqli_query($connection, $sql);
                                $r = mysqli_fetch_assoc($res);
                                ?>

                                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                <input type="text" class="form-control" name="categoryname" id="Categoryname" placeholder="Category Name" value="<?php echo $r['name']; ?>">

                            </div>
                            <div class="col col-sm-10 col-lg-9 offset-sm-1 mmd offset-lg-0">
                                <button type="submit" class="btn btn-default btn-space btn-primary">Submit</button></div>
                        </form>

                    </div>
                </div>

                </section>


                </body>
                </html>