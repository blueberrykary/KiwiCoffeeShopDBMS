
<div class="dashboard-wrapper mmmddd">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Dashboard </h2>
                    <p class="pageheader-text"></p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="Admin1.php?dashboard" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="Admin1.php?dashboard" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">


            <!-- ============================================================== -->
            <!-- Loss Revenue  -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="card border-3 border-top border-top-primary">
                    <?php
                    $sql = " SELECT SUM(contains.pqty * contains.producthprice)loss FROM contains INNER JOIN orders ON contains.id=orders.id WHERE orders.orderstatus = 'Cancelled';";
                    $resd = mysqli_query($connection, $sql);
                    while ($r = mysqli_fetch_assoc($resd)) {
                        ?>
                        <div class="card-body">
                            <h5 class="text-muted">Loss</h5>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1"><?php echo $r['loss']; ?></h1>
                            </div>
                            <div class="float-right mmmdd icon-circle-medium  icon-box-lg  bg-danger-light">
                                <i class="fa fa-arrow-down fa-fw fa-sm text-danger"></i>
                            </div>

                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- ============================================================== -->
            <!-- end Loss Revenue  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Total Revenue  -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="card border-3 border-top border-top-primary">
                    <?php
                    $sql = " SELECT SUM(orders.totalprice) summ FROM orders ORDER BY orders.totalprice;";
                    $resdd = mysqli_query($connection, $sql);
                    while ($r = mysqli_fetch_assoc($resdd)) {
                        ?>
                        <div class="card-body">
                            <h5 class="text-muted">Total Revenue</h5>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1"> <?php echo $r['summ']; ?></h1>
                            </div>
                            <div class="float-right mmmdd icon-circle-medium  icon-box-lg  bg-success-light">
                                <i class="fa fa-dollar-sign fa-fw fa-sm text-success"></i>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- ============================================================== -->
            <!-- end Total Revenue  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Customers  -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="card border-3 border-top border-top-primary">
                    <?php
                    $sql = " SELECT COUNT(customerinfo.fname) AS total FROM customerinfo;";
                    $resddd = mysqli_query($connection, $sql);
                    while ($r = mysqli_fetch_assoc($resddd)) {
                        ?>
                        <div class="card-body">
                            <h5 class="text-muted">Customers</h5>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1"> <?php echo $r['total']; ?></h1>
                            </div>
                            <div class="float-right mmmdd icon-circle-medium  icon-box-lg  bg-dark-light">
                                <i class="fa fa-users fa-fw fa-sm text-gray"></i>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end Customers  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- total orders  -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="card border-3 border-top border-top-primary">
                    <?php
                    $sql = " SELECT COUNT(orders.id) AS totall FROM orders;";
                    $resddd = mysqli_query($connection, $sql);
                    while ($r = mysqli_fetch_assoc($resddd)) {
                        ?>
                        <div class="card-body">
                            <h5 class="text-muted">Total Orders</h5>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1"><?php echo $r['totall']; ?></h1>
                            </div>
                            <div class="float-right mmmdd icon-circle-medium  icon-box-lg  bg-info-light">
                                <i class="fa fa-shopping-bag fa-fw fa-sm text-info"></i>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end total orders  -->
            <!-- ============================================================== -->
        </div>


        <div class=" dddd col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Supply Orders</h5>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Supplier Name</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Date</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = " SELECT supplier.name, supplies.datetime, supplies.qty, products.name AS products FROM supplier INNER JOIN supplies ON supplier.id = supplies.sid INNER JOIN products ON products.id = supplies.pid LIMIT 5";
                            $res = mysqli_query($connection, $sql);

                            while ($r = mysqli_fetch_assoc($res)) {
                                ?>
                                <tr>

                                    <td><?php echo $r['name']; ?></td>
                                    <td><?php echo $r['products']; ?></td>
                                    <td><?php echo $r['qty']; ?></td>
                                    <td><?php echo $r['datetime']; ?></td>


                                </tr>

                            <?php } ?>

                        </tbody>


                    </table>
                </div>
            </div>
        </div>

        <?php
        $q = mysqli_query($connection, "SELECT orderstatus, COUNT(*) FROM orders GROUP BY orderstatus");

        if ($q) {
            $chart_data[] = ["nums", "Total"];
            while ($pie_data = mysqli_fetch_assoc($q)) {
                settype($pie_data["COUNT(*)"], "int");
                $chart_data [] = [$pie_data["orderstatus"], $pie_data["COUNT(*)"]];
            }
        }
        ?>
        <script type="text/javascript">
            google.charts.load("current", {packages: ["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable(<?php echo json_encode($chart_data); ?>);

                var options = {
                    title: 'Status',
                    pieHole: 0.45,
                    height: '300',

                };

                var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                chart.draw(data, options);
            }
        </script>
        <div id="donutchart" style=" width: 780px; 
             min-height: 500px;
             margin-left: 50.5%;
             margin-top: 0px;"></div>

        <?php
        $q = mysqli_query($connection, "SELECT DATE(timestamp) AS date, COUNT(totalprice) AS count FROM orders WHERE timestamp BETWEEN '2018-09-28 00:00:00' AND NOW() GROUP BY date ORDER BY date");

        if ($q) {
            $chart_datas[] = ["num", "Total Orders"];
            while ($pie_data = mysqli_fetch_assoc($q)) {
                settype($pie_data["count"], "int");
                $chart_datas [] = [$pie_data["date"], $pie_data["count"]];
            }
        }
        ?>
        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable(<?php echo json_encode($chart_datas); ?>);

                var options = {
                    title: 'Coffee Shop Performance',
                    hAxis: {title: 'Day', titleTextStyle: {color: '#333'}},
                    vAxis: {minValue: 0}
                };

                var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
                chart.draw(data, options);
            }
        </script>

        <div id="chart_div" style=" 
             min-height: 500px;
             margin-left: 0;
             margin-top: -180px;"></div>

    </div>
</div>






