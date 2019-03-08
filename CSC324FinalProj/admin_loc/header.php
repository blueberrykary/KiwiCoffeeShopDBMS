
<?php
ob_start();
session_start();
require_once '../functions/functions.php';
if (!isset($_SESSION['email']) & empty($_SESSION['email'])) {
    header('location: login.php');
}
?>


<!DOCTYPE> 

<html>
    <head>
        <title>Kiwi's Coffee Shop Admin</title>
        <link rel='stylesheet'  href="styles/style.css" media="all" />
        <link rel="shortcut icon" type="image/x-icon" href="imgs/lloogo.png"/>
        <meta charset="utf-8">

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>   
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/style.css" media="all" />

        <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
        <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
        <link rel="stylesheet" href="../assets/libs/css/style.css">         
        <link href="styles/fonts/circular-std/style.css" rel="stylesheet">
        <link rel="stylesheet" href="styles/newstyle.css">
        <link rel="stylesheet" href="styles/fonts/fontawesome/css/fontawesome-all.css">
        <link rel="stylesheet" href="styles/charts/chartist-bundle/chartist.css">
        <link rel="stylesheet" href="styles/charts/morris-bundle/morris.css">
        <link rel="stylesheet" href="styles/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="styles/charts/c3charts/c3.css">
        <link rel="stylesheet" href="styles/fonts/flag-icon-css/flag-icon.min.css">




        <style>


            .bg-1 { 
                background-image: url(imgs/coffeebeannn.jpg);
                width: 100%;
                height: 40px;
                background-repeat: no-repeat;
                background-size: cover;
                color: #ffffff;
            }

            .bg-2 {

                color: #ffffff;
            }

            .bg-3 {
                background: #fff;
            }

            .bg-4 {
                background-image: url(imgs/rusticwood2.jpg);
                opacity: 1.5 ;
            }

            .bg-5 {
                color: #ffffff;
            }

            .p{
                font-weight: bold;
            }


            .ee {

                margin-left: 17%;
            }

            .ffss{
                margin-bottom: 25px;
            }

            .ggds {
                width:50%;
            }

            .ddd {
                margin-left: 20px;
            }

            .marg {
                margin-top: -60px;   
            }

            .eeff {

                position: fixed;

                bottom: 640px;
                right: 650px;

            }

            .eeffd {

                position: fixed;

                bottom: 220px;
                right: 650px;

            }



            .eeffdd {

                position: fixed;

                bottom: 80px;

                right: 400px;
                width: 800px;

            }
            .fffff {
                margin-left: 300px;
            }

            .mmd{
                margin-left: 40%;
                width: 20%;
            }

            .ges{
                width: 80%; 
                margin-left: 75px;
            }

            .imgedit{
                border-radius: 50%;
            }

            .ediit{
                margin-left: 10px;
                color: #44aacc;
            }

            .ads{
                width: 40%;
                margin-left: 35%;
            }




            .eeffddg {

                position: fixed;

                bottom: 60%;

                right: 400px;
                width: 900px;

            }

            .mmmdd {
                margin-top: -24px;
            }

            .mmmddd {
                margin-top: -59px;
            }

            .dddd {
                margin-left: -15px;
                height: 20%;
            }


            .hgh {
                margin-left: -0.05px;

                width: 50%;
            }


            .emx{
                width: 650px;
                margin-top: -830px;
                margin-left: 400px;
            }

            .jdf{
                width: 300px;
                margin-top: 20px;
                margin-bottom: 20px;
                margin-right: 20px;
                height: 80px;
            }

            .nn{
                margin-left: 30px;
            }

            .buttonmargin {
                margin-top: 20px;
                margin-left: 30%;
            }

            .neww{

                width: 40%;
                margin-left: 35%;
                margin-top: -840px;

            }
            
            
            .dsa {
                margin-left: 32%;
                width: 50%;
            }
            
            .cans{
                width: 50%;
                margin-left: 32%;
            }
            
            .daf{
                width: 50%;
                margin-left: 32%;
                margin-top: -820px;
            }
        
            
            .dsd{
                 margin-top: -820px; 
                  width: 40%;
                margin-left: 35%;
                
            }

        </style> 


        <script src="typeahead.min.js"></script>
        <script>
            $(document).ready(function () {
                $('input.typeahead').typeahead({
                    name: 'typeahead',
                    remote: 'search.php?key=%QUERY',
                    limit: 10
                });
            });
        </script> 





    </head>
    <body>

        <div class="logo"><a href="Admin1.php?dashboard"><img src="imgs/kclogo.png"></a>
        </div>

        <div class="dashboard-main-wrapper">
            <div class="dashboard-header">

                <nav class="navbar navbar-expand-lg bg-white fixed-top">
                    <a class="navbar-brand p ffss text-success" href="Admin1.php?dashboard"><img src="imgs/kclogo.png"></a>  
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-right-top">
                            <!--Search Bar!! Implement SQL code to GET data-->
                            <li class="nav-item">
                                <div id="custom-search" class="top-search-bar">

                                    <form method="post" action="#">
                                        <input type="text" name="typeahead" class="typeahead tt-query" autocomplete="on" spellcheck="false" placeholder="search">
                                    </form>                                                     

                                </div>
                            </li> 



                            <li class="nav-item dropdown nav-user">
                                <a class="nav-link nav-user-img" href="logout.php" id="navbarDropdownMenuLink2"  ><img src="images/Sign Out_64px.png" alt="" class="mt-4 user-avatar-md rounded-circle"></a>
                                <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                    <div class="nav-user-info">
                                        <h5 class="mb-0 text-white nav-user-name">John Abraham</h5>
                                        <span class="status"></span><span class="ml-2">Available</span>
                                    </div>

                                </div>
                            </li>


                        </ul>



                    </div>


                </nav>  

            </div>
            <div class="nav-left-sidebar bg-dark sidebar-dark">
                <div class="menu-list p bg-dark">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-light ">
                        <a class="d-xl-none d-lg-non bg-dark" href="Admin1.php">Dashboard</a>
                        <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon bg-dark"></span>
                        </button>
                        <div class="collapse navbar-collapse bg-dark" id="navbarNav">
                            <ul class="navbar-nav flex-column bg-dark">
                                <li class="nav-divider bg-dark"> <br>
                                    Menu
                                </li>
                                <li class="nav-item bg-dark ">

                                    <a class="nav-link active bg-dark" href="Admin1.php?dashboard" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>

                                </li>
                                <li class="nav-item bg-dark">
                                    <a class="nav-link bg-dark" href="" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-box"></i> Products</a>
                                    <div id="submenu-2" class="collapse submenu bg-dark" style="">
                                        <ul class="nav flex-column bg-dark">

                                            <li class="nav-item">
                                                <a class="nav-link" href="Admin1.php?products">Products</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="Admin1.php?add_products">Add Products</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item bg-dark">
                                    <a class="nav-link bg-dark" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-clipboard"></i>Categories</a>
                                    <div id="submenu-3" class="collapse submenu bg-dark" style="">
                                        <ul class="nav flex-column bg-dark">
                                            <li class="nav-item bg-dark">
                                                <a class="nav-link" href="Admin1.php?category">View Categories</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="Admin1.php?add_category">Add Categories</a>
                                            </li>


                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item bg-dark">
                                    <a class="nav-link bg-dark" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fas fa-truck"></i>Supplier</a>
                                    <div id="submenu-4" class="collapse submenu bg-dark" style="">
                                        <ul class="nav flex-column bg-dark">
                                            <li class="nav-item bg-dark">
                                                <a class="nav-link" href="Admin1.php?view_supplier">View Suppliers</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="Admin1.php?add_supplier">Add Supplier</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="Admin1.php?order_supplies">Order Supplies</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item bg-dark">
                                    <a class="nav-link bg-dark" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-shopping-bag"></i>Orders</a>
                                    <div id="submenu-5" class="collapse submenu bg-dark" style="">
                                        <ul class="nav flex-column bg-dark">
                                            <li class="nav-item">
                                                <a class="nav-link" href="Admin1.php?orders">View Orders</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item bg-dark">
                                    <a class="nav-link bg-dark" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-users"></i> Customers <span class="badge badge-secondary">New</span></a>
                                    <div id="submenu-6" class="collapse submenu bg-dark" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="Admin1.php?customers">View Customers</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item bg-dark">
                                    <a class="nav-link bg-dark" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-star"></i> Employees <span class="badge badge-secondary">New</span></a>
                                    <div id="submenu-7" class="collapse submenu bg-dark" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="Admin1.php?employee">View Employees</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="Admin1.php?add_employee">Add Employees</a>
                                            </li>
                                             <li class="nav-item">
                                                <a class="nav-link" href="Admin1.php?add_emprole">Add Employees</a>
                                            </li>
                                            
                                            
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>



            <?php
            if (isset($_GET['dashboard'])) {

                include("dashboard.php");
            }


            if (isset($_GET['category'])) {

                include("categories.php");
            }




            if (isset($_GET['add_category'])) {

                include("addcategory.php");
            }

            if (isset($_GET['employee'])) {

                include("viewemployees.php");
            }

            if (isset($_GET['add_employee'])) {

                include("addemployee.php");
            }

            if (isset($_GET['add_supplier'])) {

                include("Supplier.php");
            }

            if (isset($_GET['view_supplier'])) {

                include("viewsupplier.php");
            }

            if (isset($_GET['order_supplies'])) {

                include("order_supplies.php");
            }

            if (isset($_GET['products'])) {

                include("products.php");
            }

            if (isset($_GET['add_products'])) {

                include("addproduct.php");
            }


            if (isset($_GET['customers'])) {

                include("customers.php");
            }


            if (isset($_GET['orders'])) {

                include("orders.php");
            }
            
            
            if (isset($_GET['add_emprole'])) {

                include("add_emprole.php");
            }
            ?>  



        </div>


