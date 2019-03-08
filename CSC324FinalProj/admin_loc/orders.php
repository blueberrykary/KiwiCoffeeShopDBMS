
<div class="marg dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Orders</h2>
                    <p class="pageheader-text"></p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="Admin1.php?dashboard" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="Admin1.php?orders" class="breadcrumb-link">Orders</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View Order</li>
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
                                            <th>#</th>
                                            <th>Customer Name</th>
                                            <th>Total Price</th>
                                            <th>Order Status</th>
                                            <th>Payment Mode</th>
                                            <th>Order Placed On</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT o.id, o.totalprice, o.orderstatus, o.paymentmode, o.timestamp, u.fname, u.lname FROM orders o JOIN customerinfo u WHERE o.uid=u.uid ORDER BY o.id DESC LIMIT 15";
                                        $res = mysqli_query($connection, $sql);

                                        while ($r = mysqli_fetch_assoc($res)) {
                                            ?>
                                            <tr>
                                                <th><?php echo $r['id']; ?></th>
                                                <td><?php echo $r['fname'] . " " . $r['lname']; ?></td>
                                                <td><?php echo $r['totalprice']; ?></td>
                                                <td><font color="MEDIUMPURPLE"><?php echo $r['orderstatus']; ?></font></td>
                                                <td><?php echo $r['paymentmode']; ?></td>
                                                <td><?php echo $r['timestamp']; ?></td>
                                                <td><a href="orderprocess.php?id=<?php echo $r['id']; ?>">Process Order</a></td>
                                            </tr>
<?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                        </section>
