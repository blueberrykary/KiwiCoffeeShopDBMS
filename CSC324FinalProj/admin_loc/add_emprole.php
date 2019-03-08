<?php
if (isset($_POST) & !empty($_POST)) {
    $eid = mysqli_real_escape_string($connection, $_POST['eid']);
    $rid = mysqli_real_escape_string($connection, $_POST['rid']);
    $sql = "INSERT INTO is_a (eid, rid) VALUES ('$eid', '$rid')";
    $res = mysqli_query($connection, $sql);
    if ($res) {
        $smsg = "Employee Role Added";
    } else {
        $fmsg = "Failed to Add Employee Role";
    }
}
?>

<section id="content">
    <div class="content-blog ads">
        <div class="container">

            <div class="ddd col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Add Employee Role</h5>
                    <div class="card-body">

                        <?php if (isset($fmsg)) { ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
                        <?php if (isset($smsg)) { ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
                        <form method="post">
                            <div class="form-group">
                                <label for="Productname">Employee ID</label>
                                <input type="text" class="form-control" name="eid" id="eid" placeholder="Employee ID">
                            </div>
                            <div class="form-group">
                                <label for="Productname">Role ID</label>
                                <input type="text" class="form-control" name="rid" id="rid" placeholder="Role ID">
                            </div>
                            <div class="col col-sm-10 col-lg-9 offset-sm-1 mmd offset-lg-0">
                                <button type="submit" class="btn btn-default btn-space btn-primary">Submit</button>
                        </form>

                    </div>
                </div>

                </section>
