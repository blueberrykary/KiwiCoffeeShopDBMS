<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Shop Home Page - PHP Ecommerce</title>

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/favicon.png">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="js/isotope/isotope.css">
	<link rel="stylesheet" href="js/flexslider/flexslider.css">
	<link rel="stylesheet" href="js/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="js/owl-carousel/owl.theme.css">
	<link rel="stylesheet" href="js/owl-carousel/owl.transitions.css">
	<link rel="stylesheet" href="js/superfish/css/megafish.css" media="screen">
	<link rel="stylesheet" href="js/superfish/css/superfish.css" media="screen">
	<link rel="stylesheet" href="js/pikaday/pikaday.css">
	<link rel="stylesheet" href="css/settings-panel.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/light.css">
	<link rel="stylesheet" href="css/responsive.css">

	<!-- JS Font Script -->
	<script src="http://use.edgefonts.net/bebas-neue.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Modernizer -->
	<script src="js/modernizr.custom.js"></script>
        
        <style>
            .fakeimg {
                height: 200px;
                background: #aaa;
            }    
            body {font-family: Arial, Helvetica, sans-serif;}

            /* Full-width input fields */
            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            /* Set a style for all buttons */
            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                opacity: 0.8;
            }

            /* Extra styles for the cancel button */
            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }

            /* Center the image and position the close button */
            .imgcontainer {
                text-align: center;
                margin: 0px 0 12px 0;
                position: relative;
            }

            img.avatar {
                width: 100%;
            }

            .container {
                padding: 16px;
            }

            span.psw {
                float: right;
                padding-top: 16px;
            }

            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                padding-top: 60px;
            }

            /* Modal Content/Box */
            .modal-content {
                background-color: #fefefe;
                margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                border: 1px solid #888;
                width: 30%; /* Could be more or less, depending on screen size */
            }

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

            .carousel-inner img {
                width: 100%;
                height: 800px;
                margin-left: auto;
                margin-right: auto;
            }

            /* The Close Button (x) */
            .close {
                position: absolute;
                right: 25px;
                top: 0;
                color: #000;
                font-size: 35px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: red;
                cursor: pointer;
            }

            /* Add Zoom Animation */
            .animate {
                -webkit-animation: animatezoom 0.6s;
                animation: animatezoom 0.6s
            }

            @-webkit-keyframes animatezoom {
                from {-webkit-transform: scale(0)} 
                to {-webkit-transform: scale(1)}
            }

            @keyframes animatezoom {
                from {transform: scale(0)} 
                to {transform: scale(1)}
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
                span.psw {
                    display: block;
                    float: none;
                }
                .cancelbtn {
                    width: 100%;
                }
            }
            .col_white_amrc { color:#FFF;}
            footer { width:100%; background-color:#343a40; min-height:250px; padding:10px 0px 25px 0px ;}
            .pt2 { padding-top:40px ; margin-bottom:20px ;}
            footer p { font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:8px;}
            .mb10 { padding-bottom:15px ;}
            .footer_ul_amrc { margin:0px ; list-style-type:none ; font-size:14px; padding:0px 0px 10px 0px ; }
            .footer_ul_amrc li {padding:0px 0px 5px 0px;}
            .footer_ul_amrc li a{ color:#CCC;}
            .footer_ul_amrc li a:hover{ color:#fff; text-decoration:none;}
            .fleft { float:left;}
            .padding-right { padding-right:10px; }

            .footer_ul2_amrc {margin:0px; list-style-type:none; padding:0px;}
            .footer_ul2_amrc li p { display:table; }
            .footer_ul2_amrc li a:hover { text-decoration:none;}
            .footer_ul2_amrc li i { margin-top:5px;}

            .bottom_border { border-bottom:1px solid #343a40; padding-bottom:20px;}
            .foote_bottom_ul_amrc {
                list-style-type:none;
                padding:0px;
                display:table;
                margin-top: 10px;
                margin-right: auto;
                margin-bottom: 10px;
                margin-left: auto;
            }
            .foote_bottom_ul_amrc li { display:inline;}
            .foote_bottom_ul_amrc li a { color:#999; margin:0 12px;}

            .social_footer_ul { display:table; margin:15px auto 0 auto; list-style-type:none;  }
            .social_footer_ul li { padding-left:20px; padding-top:10px; float:left; }
            .social_footer_ul li a { color:#CCC; border:1px solid #CCC; padding:8px;border-radius:50%;}
            .social_footer_ul li i {  width:20px; height:20px; text-align:center;}
            .btn-primary {
                background-color: #E7A331;
                color: #ffffff;
                border: 2px solid #E7A331;
                text-transform: uppercase;
                border-radius: 4px;
            }
            .btn-primary:hover {
                background-color: #d6962c;
                border-color: #d6962c;
                color: #fff;
            }

            .portfolio{
                background:url(assets/images/portfoliobg.jpg) center top no-repeat;
                -moz-background-size: cover;
                -webkit-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                width: 100%;
                overflow: hidden;	
            }

            .portfolio_content{
                padding-bottom:120px;
                display:inline-block;
            }
            .portfolio .portfolio_content .head_title h3{
                color:#000000;
            }
            .portfolio .portfolio_content .head_title h4{
                color:#000000;
            }

            .single_portfolio_text{
                display:inline-block;
                padding:0;
                position:relative;
                overflow:hidden;

            }
            .single_portfolio_text img{
                width:100%;
            }

            .single_portfolio_text:hover .portfolio_images_overlay{
                top:5%;
                left: 5%;
            }

            .portfolio_images_overlay{
                width: 90%;
                height: 90%;
                background: rgba(0, 0, 0, .5);
                padding: 20px;
                margin: 0 auto;
                top:-100%;
                left: 5%;
                position: absolute;
                transition:.6s;
            }
            .portfolio_images_overlay h6{
                text-transform:uppercase;
                color:#fff;
                font-size:2rem;
                line-height:2.575rem;
                font-weight: 500;
                margin-bottom: 1rem;
                margin-top: 1rem;
            }

            .portfolio_images_overlay p.product_price{
                font-size:2.5725rem;
                color:#fff;
                line-height:3rem;
            }
            .portfolio_images_overlay .btn{
                margin-top: 25px;
            }

            @media (min-width:769px) and (max-width:991px) {
                .portfolio_images_overlay {
                    padding: 0px;
                }
            }
            @media (max-width:768px) {
                .portfolio_images_overlay{
                    padding: 170px 20px;
                }
            }
            @media (max-width:580px) {
                .portfolio_images_overlay{
                    padding: 100px 20px;
                }
            }
            @media (max-width:480px) {
                .portfolio_images_overlay{
                    padding: 40px 20px;
                }
            }
            @media (max-width:320px) {
                .portfolio_images_overlay{
                    padding: 20px;
                }
            }

            /* FontAwesome for working BootSnippet :> */

            @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
            #team {
                background: #eee !important;
            }

            .btn-primary:hover,
            .btn-primary:focus {
                background-color: #108d6f;
                border-color: #108d6f;
                box-shadow: none;
                outline: none;
            }

            .btn-primary {
                color: #fff;
                background-color: #007b5e;
                border-color: #007b5e;
            }

            section {
                padding: 60px 0;
            }

            section .section-title {
                text-align: center;
                color: #007b5e;
                margin-bottom: 10px;
                text-transform: uppercase;
            }

            #team .card {
                border: none;
                background: #ffffff;
            }

            .image-flip:hover .backside,
            .image-flip.hover .backside {
                -webkit-transform: rotateY(0deg);
                -moz-transform: rotateY(0deg);
                -o-transform: rotateY(0deg);
                -ms-transform: rotateY(0deg);
                transform: rotateY(0deg);
                border-radius: .20rem;
            }

            .image-flip:hover .frontside,
            .image-flip.hover .frontside {
                -webkit-transform: rotateY(180deg);
                -moz-transform: rotateY(180deg);
                -o-transform: rotateY(180deg);
                transform: rotateY(180deg);
            }

            .mainflip {
                -webkit-transition: 1s;
                -webkit-transform-style: preserve-3d;
                -ms-transition: 1s;
                -moz-transition: 1s;
                -moz-transform: perspective(1000px);
                -moz-transform-style: preserve-3d;
                -ms-transform-style: preserve-3d;
                transition: 1s;
                transform-style: preserve-3d;
                position: relative;
            }

            .frontside {
                position: relative;
                -webkit-transform: rotateY(0deg);
                -ms-transform: rotateY(0deg);
                z-index: 2;
                margin-bottom: 30px;
            }

            .backside {
                position: absolute;
                top: 0;
                left: 0;
                background: white;
                -webkit-transform: rotateY(-180deg);
                -moz-transform: rotateY(-180deg);
                -o-transform: rotateY(-180deg);
                -ms-transform: rotateY(-180deg);
                transform: rotateY(-180deg);
                -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
                -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
                box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            }

            .frontside,
            .backside {
                -webkit-backface-visibility: hidden;
                -moz-backface-visibility: hidden;
                -ms-backface-visibility: hidden;
                backface-visibility: hidden;
                -webkit-transition: 1s;
                -webkit-transform-style: preserve-3d;
                -moz-transition: 1s;
                -moz-transform-style: preserve-3d;
                -o-transition: 1s;
                -o-transform-style: preserve-3d;
                -ms-transition: 1s;
                -ms-transform-style: preserve-3d;
                transition: 1s;
                transform-style: preserve-3d;
            }

            .frontside .card,
            .backside .card {
                min-height: 352px;
            }

            .backside .card a {
                font-size: 18px;
                color: #007b5e !important;
            }

            .frontside .card .card-title,
            .backside .card .card-title {
                color: #007b5e !important;
            }

            .frontside .card .card-body img {
                width: 160px;
                height: 160px;
                border-radius: 50%;
            }           

            body {
                font-family: "Lato", sans-serif;
            }



            .sidebar {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #111;
                overflow-x: hidden;
                transition: 0.5s;
                padding-top: 60px;
            }

            .sidebar a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
                transition: 0.3s;
            }

            .sidebar a:hover {
                color: #f1f1f1;
            }

            .sidebar .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
            }

            .openbtn {
                font-size: 20px;
                cursor: pointer;
                background-color: #111;
                color: white;
                padding: 10px 15px;
                border: none;
            }

            .openbtn:hover {
                background-color: #444;
            }

            #main {
                transition: margin-left .5s;
                padding: 16px;
            }

            /* Style the sidenav links and the dropdown button */
            body {
                font-family: "Lato", sans-serif;
            }

            .sidenav a, .dropdown-btn {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
                border: none;
                background: none;
                width: 100%;
                text-align: left;
                cursor: pointer;
                outline: none;
            }

            /* On mouse-over */
            .sidenav a:hover, .dropdown-btn:hover {
                color: #f1f1f1;
            }

            /* Main content */
            .main {
                margin-left: 200px; /* Same as the width of the sidenav */
                font-size: 20px; /* Increased text to enable scrolling */
                padding: 0px 10px;
            }

            /* Add an active class to the active dropdown button */
            .active {
                background-color: white;
                color: white;
            }

            /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
            .dropdown-container {
                display: none;
                background-color: #262626;
                padding-left: 8px;
            }

            /* Optional: Style the caret down icon */
            .fa-caret-down {
                float: right;
                padding-right: 8px;
            }

            .btn-custom {
                color: #a0b2ba;
            }


            /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
            @media screen and (max-height: 450px) {
                .sidebar {padding-top: 15px;}
                .sidebar a {font-size: 18px;}
            }
            
            
            
            
            
            


            /* The Close Button (x) */
            .close {
                position: absolute;
                right: 25px;
                top: 0;
                color: #000;
                font-size: 35px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: red;
                cursor: pointer;
            }

            /* Add Zoom Animation */
            .animate {
                -webkit-animation: animatezoom 0.6s;
                animation: animatezoom 0.6s
            }

            @-webkit-keyframes animatezoom {
                from {-webkit-transform: scale(0)} 
                to {-webkit-transform: scale(1)}
            }

            @keyframes animatezoom {
                from {transform: scale(0)} 
                to {transform: scale(1)}
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
                span.psw {
                    display: block;
                    float: none;
                }
                .cancelbtn {
                    width: 100%;
                }
            }



            .col_white_amrc { color:#FFF;}
            footer { width:100%; background-color:#263238; min-height:250px; padding:10px 0px 25px 0px ;}
            .pt2 { padding-top:40px ; margin-bottom:20px ;}
            footer p { font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:8px;}
            .mb10 { padding-bottom:15px ;}
            .footer_ul_amrc { margin:0px ; list-style-type:none ; font-size:14px; padding:0px 0px 10px 0px ; }
            .footer_ul_amrc li {padding:0px 0px 5px 0px;}
            .footer_ul_amrc li a{ color:#CCC;}
            .footer_ul_amrc li a:hover{ color:#fff; text-decoration:none;}
            .fleft { float:left;}
            .padding-right { padding-right:10px; }

            .footer_ul2_amrc {margin:0px; list-style-type:none; padding:0px;}
            .footer_ul2_amrc li p { display:table; }
            .footer_ul2_amrc li a:hover { text-decoration:none;}
            .footer_ul2_amrc li i { margin-top:5px;}

            .bottom_border { border-bottom:1px solid #323f45; padding-bottom:20px;}
            .foote_bottom_ul_amrc {
                list-style-type:none;
                padding:0px;
                display:table;
                margin-top: 10px;
                margin-right: auto;
                margin-bottom: 10px;
                margin-left: auto;
            }
            .foote_bottom_ul_amrc li { display:inline;}
            .foote_bottom_ul_amrc li a { color:#999; margin:0 12px;}

            .social_footer_ul { display:table; margin:15px auto 0 auto; list-style-type:none;  }
            .social_footer_ul li { padding-left:20px; padding-top:10px; float:left; }
            .social_footer_ul li a { color:#CCC; border:1px solid #CCC; padding:8px;border-radius:50%;}
            .social_footer_ul li i {  width:20px; height:20px; text-align:center;}


            .btn-primary {
                background-color: #E7A331;
                color: #ffffff;
                border: 2px solid #E7A331;
                text-transform: uppercase;
                border-radius: 4px;
            }
            .btn-primary:hover {
                background-color: #d6962c;
                border-color: #d6962c;
                color: #fff;
            }

            .portfolio{
                background:url(assets/images/portfoliobg.jpg) center top no-repeat;
                -moz-background-size: cover;
                -webkit-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                width: 100%;
                overflow: hidden;	
            }

            .portfolio_content{
                padding-bottom:120px;
                display:inline-block;
            }
            .portfolio .portfolio_content .head_title h3{
                color:#000000;
            }
            .portfolio .portfolio_content .head_title h4{
                color:#000000;
            }

            .single_portfolio_text{
                display:inline-block;
                padding:0;
                position:relative;
                overflow:hidden;

            }
            .single_portfolio_text img{
                width:100%;
            }

            .single_portfolio_text:hover .portfolio_images_overlay{
                top:5%;
                left: 5%;
            }

            .portfolio_images_overlay{
                width: 90%;
                height: 90%;
                background: rgba(0, 0, 0, .5);
                padding: 20px;
                margin: 0 auto;
                top:-100%;
                left: 5%;
                position: absolute;
                transition:.6s;
            }
            .portfolio_images_overlay h6{
                text-transform:uppercase;
                color:#fff;
                font-size:2rem;
                line-height:2.575rem;
                font-weight: 500;
                margin-bottom: 1rem;
                margin-top: 1rem;
            }

            .portfolio_images_overlay p.product_price{
                font-size:2.5725rem;
                color:#fff;
                line-height:3rem;
            }
            .portfolio_images_overlay .btn{
                margin-top: 25px;
            }

            @media (min-width:769px) and (max-width:991px) {
                .portfolio_images_overlay {
                    padding: 0px;
                }
            }
            @media (max-width:768px) {
                .portfolio_images_overlay{
                    padding: 170px 20px;
                }
            }
            @media (max-width:580px) {
                .portfolio_images_overlay{
                    padding: 100px 20px;
                }
            }
            @media (max-width:480px) {
                .portfolio_images_overlay{
                    padding: 40px 20px;
                }
            }
            @media (max-width:320px) {
                .portfolio_images_overlay{
                    padding: 20px;
                }
            }

            .brt {

                border-radius:50%;


            }

            .brt {

                background-color:transparent;


            }

            .bd {


                background-color: grey;
                color: black;
                border-radius: 100%;
                witdh: 100%;
                height:100%;
                margin: 8px 70px;
                top: 72%;

            }

            .bf {

                margin: 8px 0;
                background-color: grey;
                color: black;
                border-radius: 100%;
                witdh: 100%;
                height:100%;



            }

            .bk { 

                position: absolute;
                top: 72%;
                left: 50%;
                margin-right: -50%;
                transform: translate(-50%, -50%)

            }


            .product-grid4,.product-grid4 .product-image4{position:relative}
            .product-grid4{font-family:Poppins,sans-serif;text-align:center;border-radius:5px;overflow:hidden;z-index:1;transition:all .3s ease 0s}
            .product-grid4:hover{box-shadow:0 0 10px rgba(0,0,0,.2)}
            .product-grid4 .product-image4 a{display:block}
            .product-grid4 .product-image4 img{width:100%;height:auto; border-image:50%}
            .product-grid4 .pic-1{opacity:1;transition:all .5s ease-out 0s}
            .product-grid4:hover .pic-1{opacity:0}
            .product-grid4 .pic-2{position:absolute;top:0;left:0;opacity:0;transition:all .5s ease-out 0s}
            .product-grid4:hover .pic-2{opacity:1}
            .product-grid4 .social{width:180px;padding:0;margin:0 auto;list-style:none;position:absolute;right:0;left:0;top:50%;transform:translateY(-50%);transition:all .3s ease 0s}
            .product-grid4 .social li{display:inline-block;opacity:0;transition:all .7s}
            .product-grid4 .social li:nth-child(1){transition-delay:.15s}
            .product-grid4 .social li:nth-child(2){transition-delay:.3s}
            .product-grid4 .social li:nth-child(3){transition-delay:.45s}
            .product-grid4:hover .social li{opacity:1}
            .product-grid4 .social li a{color:#222;background:#fff;font-size:17px;line-height:36px;width:40px;height:36px;border-radius:2px;margin:0 5px;display:block;transition:all .3s ease 0s}
            .product-grid4 .social li a:hover{color:#fff;background:#16a085}
            .product-grid4 .social li a:after,.product-grid4 .social li a:before{content:attr(data-tip);color:#fff;background-color:#000;font-size:12px;line-height:20px;border-radius:3px;padding:0 5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
            .product-grid4 .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-22px;z-index:-1}
            .product-grid4 .social li a:hover:after,.product-grid4 .social li a:hover:before{opacity:1}
            .product-grid4 .product-discount-label,.product-grid4 .product-new-label{color:#fff;background-color:#16a085;font-size:13px;font-weight:800;text-transform:uppercase;line-height:45px;height:45px;width:45px;border-radius:50%;position:absolute;left:10px;top:15px;transition:all .3s}
            .product-grid4 .product-discount-label{left:auto;right:10px;background-color:#d7292a}
            .product-grid4:hover .product-new-label{opacity:0}
            .product-grid4 .product-content{padding:25px}
            .product-grid4 .title{font-size:15px;font-weight:400;text-transform:capitalize;margin:0 0 7px;transition:all .3s ease 0s}
            .product-grid4 .title a{color:#222}
            .product-grid4 .title a:hover{color:#16a085}
            .product-grid4 .price{color:#16a085;font-size:17px;font-weight:700;margin:0 2px 15px 0;display:block}
            .product-grid4 .price span{color:#909090;font-size:13px;font-weight:400;letter-spacing:0;text-decoration:line-through;text-align:left;vertical-align:middle;display:inline-block}
            .product-grid4 .add-to-cart{border:1px solid #e5e5e5;display:inline-block;padding:10px 20px;color:#888;font-weight:600;font-size:14px;border-radius:4px;transition:all .3s}
            .product-grid4:hover .add-to-cart{border:1px solid transparent;background:#16a085;color:#fff}
            .product-grid4 .add-to-cart:hover{background-color:#505050;box-shadow:0 0 10px rgba(0,0,0,.5)}


            .ca {
                grid-template-columns: repeat(3);
            }


            @media only screen and (max-width:990px){.product-grid4{margin-bottom:30px}
            }


            body {
                font-family: "Lato", sans-serif;
            }



            .sidebar {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #111;
                overflow-x: hidden;
                transition: 0.5s;
                padding-top: 60px;
            }

            .sidebar a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
                transition: 0.3s;
            }

            .sidebar a:hover {
                color: #f1f1f1;
            }

            .sidebar .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
            }

            .openbtn {
                font-size: 20px;
                cursor: pointer;
                background-color: #111;
                color: white;
                padding: 10px 15px;
                border: none;
            }

            .openbtn:hover {
                background-color: #444;
            }

            #main {
                transition: margin-left .5s;
                padding: 16px;
            }






            /* Style the sidenav links and the dropdown button */
            body {
                font-family: "Lato", sans-serif;
            }

            .sidenav a, .dropdown-btn {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
                border: none;
                background: none;
                width: 100%;
                text-align: left;
                cursor: pointer;
                outline: none;
            }

            /* On mouse-over */
            .sidenav a:hover, .dropdown-btn:hover {
                color: #f1f1f1;
            }

            /* Main content */
            .main {
                margin-left: 200px; /* Same as the width of the sidenav */
                font-size: 20px; /* Increased text to enable scrolling */
                padding: 0px 10px;
            }

  
            /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
            .dropdown-container {
                display: none;
                background-color: #262626;
                padding-left: 8px;
            }

            /* Optional: Style the caret down icon */
            .fa-caret-down {
                float: right;
                padding-right: 8px;
            }

            .btn-custom {
                color: #a0b2ba;
            }


            /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
            @media screen and (max-height: 450px) {
                .sidebar {padding-top: 15px;}
                .sidebar a {font-size: 18px;}
            }



            html {
                scroll-behavior: smooth;
            }

            #section1 {

            }

            #section2 {

            }

            #section3 {

            }

            #section4 {

            }

            #section5 {

            }

            #section6 {

            }
            
            
  .zoom {
  padding: 0px;
  background-color: transparent;
  transition: transform .4s; /* Animation */
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
       

.mmm {
    margin-left: 150px;
    padding: 10px;
}
            
        </style>

</head>
<body class="multi-page">

		
			<div class="row">
				<div class="col-md-3 col-xs-5 logo">
					<a href="http://localhost/Cafe_Menu.php"><img src="http://[::1]/cishop/assets/images/logo.png" class="img-responsive" alt=""/></a>
				</div>
				
			</div>