 <?php 
session_start();
require_once 'functions/functions.php'; ?>


<?php include 'header2.php'; ?>
<?php include 'nav.php'; ?>


<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="imgs/daaaa.jpg" alt="Los Angeles" width="700" height="1000">
            <div class="carousel-caption">
                <h3>Freshly Brewed Coffee Daily</h3>
                <p><h6>A wide variety of ground coffee ready to order.</h6></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="imgs/coffeesplash.jpg" alt="Chicago" width="700" height="200">
            <div class="carousel-caption">
                <h3>Brewed Coffee</h3>
                <p><h6>Coffee brewed freshly daily on the go 
                    because a freshly cup of coffee makes a morning start fresh.</h6></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="imgs/saaas.jpg" alt="New York" width="700" height="200">
            <div class="carousel-caption">

                <h3>Espresso Beverages</h3>
                <p><h6>Fresh, richly made expresso with a hint of steamed milk to fit your preference.</h6></p>

            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

<div class="jumbotron bg-4 jumbotron-fluid">
    <div class="container">
        <div class ="bg-5">
            <h2>About Us</h2>      
            <p><h4>Kiwi's Coffee Shop started is based on Los Angeles, CA built on 2018. It 
                currently brews fresh coffee everyday and customers are given the ability to
                order online. The way it works consists of customers placing their order with
                the option to pay onsite or online. Our baristas prepares the customer's 
                order with an estimated time and is ready on the go when the customer arrives.</h4></p>
        </div>
    </div>   
</div>
<!------------------ Hover Effect Style : Demo - 15 --------------->
<div class="container mt-40">
    <div class="row mt-40">
        <div class="col-sm-4 col-md-6 single_portfolio_text">

            <img src="imgs/hot.jpg" alt="product">
            <div class="portfolio_images_overlay text-center">
                <br><br><br><br>
                <p class="product_price">Product Details</p>
                <a href="Cafe_Menu.php" class="btn btn-dark">Products</a>
            </div>

        </div>
        <div class="col-sm-4 col-md-6 single_portfolio_text">

            <img src="imgs/aboutuss.jpg" alt="order">
            <div class="portfolio_images_overlay text-center">
                <br><br><br><br>
                <p class="product_price">Order Now</p>
                <a href="Cafe_Menu.php" class="btn btn-dark">Order</a>
            </div>
        </div>
    </div>
</div>

<br><br>
<!--footer starts from here-->
<?php include 'footer2.php'; ?>
</body>
</html>
