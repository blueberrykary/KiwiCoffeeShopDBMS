
 <div class="marg dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Employee</h2>
                            <p class="pageheader-text"></p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="Admin1.php?dashboard" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="Admin1.php?employee" class="breadcrumb-link">Employee</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">View Employee</li>
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
                                <h5 class="card-header">Employees</h5>
                                <div class="card-body">
                                    <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM employee LIMIT 10";
                    $res = mysqli_query($connection, $sql);
                    while ($r = mysqli_fetch_assoc($res)) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $r['id']; ?></th>
                            <td><?php echo $r['fname']; ?></td>
                            <td><?php echo $r['lname']; ?></td>
                            <td><?php echo $r['email']; ?></td>
                            <td><a href="edit_employee.php?id=<?php echo $r['id']; ?>"><i class="far fa-edit"></i></a> | <a href="delemployee.php?id=<?php echo $r['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
                                </div>
                            </div></div>



           <div class="content-blog">
		<div class="container">
				<div class="ddd hgh m-r-2 col-xl-12 col-sm-12 col-md-10 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Employees</h5>
                                <div class="card-body">
                                    <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Role</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                    </tr>
                </thead>
                <tbody>



                    <?php
                    $sql = "SELECT emp_role.role, employee.fname, employee.lname FROM employee INNER JOIN is_a ON employee.id = is_a.eid INNER JOIN emp_role ON emp_role.id = is_a.rid LIMIT 10";
                    $res = mysqli_query($connection, $sql);
                    while ($r = mysqli_fetch_assoc($res)) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $r['role']; ?></th>
                            <td><?php echo $r['fname']; ?></td>
                            <td><?php echo $r['lname']; ?></td>
                        </tr>
                    <?php } ?>
                        
                </tbody>
            </table>

        </div>
                                
                   </div> 
                                    </section>
                                

   



                                  <?php
        $q = mysqli_query($connection, "SELECT emp_role.role AS role, COUNT(*)cem FROM emp_role INNER JOIN is_a ON emp_role.id = is_a.rid GROUP BY role");

        if ($q) {
            $chart_data[] = ["fruits", "Total"];
            while ($pie_data = mysqli_fetch_assoc($q)) {
                settype($pie_data["cem"], "int");
                $chart_data [] = [$pie_data["role"], $pie_data["cem"]];
            }
        }
        ?>
        <script type="text/javascript">
            google.charts.load("current", {packages: ["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable(<?php echo json_encode($chart_data); ?>);

                var options = {
                    title: 'Employed Roles',
                    pieHole: 0.0,
                    height: '300',
                  

                };

                var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                chart.draw(data, options);
            }
        </script>
        <div id="donutchart" style=" width:550px; 
             min-height: 600px;
             margin-left: 50.5%;
             margin-top: -510px;"></div>
