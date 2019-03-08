<?php
session_start();
require_once '../functions/functions.php';
if (isset($_POST) & !empty($_POST)) {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM employee WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        //echo "User exits, create session";
        $_SESSION['email'] = $email;
        header("location: Admin1.php?dashboard");
    } else {
        $fmsg = "Invalid Login Credentials";
    }
}
?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->

    <head>
    <meta charset="UTF-8">  
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" type="image/x-icon" href="imgs/lloogo.png
              "/>
    
    <!------ Include the above in your HEAD tag ---------->  

    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>

    <style>
        body{
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            font-family:'HelveticaNeue','Arial', sans-serif;

        }
        a{color:#58bff6;text-decoration: none;}
        a:hover{color:#aaa; }
        .pull-right{float: right;}
        .pull-left{float: left;}
        .clear-fix{clear:both;}
        div.logo{text-align: center; margin: 5px 28px 30px 20px; fill: #566375;}
        .head{padding:40px 0px; 10px 0}
        .logo-active{fill: #44aacc !important;}
        #formWrapper{
            background: rgba(0,0,0,.2); 
            width:100%; 
            height:100%; 
            position: absolute; 
            border-radius: 50px;
            top:0; 
            left:0;
            transition:all .3s ease;}
        .darken-bg{background: rgba(0,0,0,.5) !important; transition:all .3s ease;}

        div#form{
            position: absolute;
            width:360px;

            height:500px;
            background-color: #fff;
            margin:auto;
            border-radius: 25px;
            padding:35px;
            left:50%;
            top:50%;
            margin-left:-180px;
            margin-top:-250px;
        }
        div.form-item{position: relative; display: block; margin-bottom: 40px;}
        input{transition: all .2s ease;}
        input.form-style{
            color:#8a8a8a;
            display: block;
            width: 90%;
            height: 44px;
            padding: 5px 5%;
            margin: 20px 40px 20px 15px;
            border:1px solid #ccc;
            -moz-border-radius:100px;
            -webkit-border-radius: 100px;
            border-radius: 100px;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            background-color: #fff;
            font-family:'HelveticaNeue','Arial', sans-serif;
            font-size: 105%;
            letter-spacing: .8px;
        }
        div.form-item .form-style:focus{outline: none; border:1px solid #58bff6; color:#58bff6; }
        div.form-item p.formLabel {
            border-radius: 50px;
            position: absolute;
            left:26px;
            top:10px;
            transition:all .4s ease;
            color:#bbb;}
        .formTop{top:-22px !important; left:26px; background-color: #fff; padding:0 5px; font-size: 14px; color:#58bff6 !important;}
        .formStatus{color:#8a8a8a !important;}
        input[type="submit"].login{
            float:right;
            width: 112px;
            height: 37px;
            -moz-border-radius: 19px;
            -webkit-border-radius: 19px;
            border-radius: 19px;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            background-color: #55b1df;
            border:1px solid #55b1df;
            border:none;
            color: #fff;
            font-weight: bold;
        }
        input[type="submit"].login:hover{background-color: #fff; border:1px solid #55b1df; color:#55b1df; cursor:pointer;}
        input[type="submit"].login:focus{outline: none;}




        .fa{
            width: 400px;
            height: 50px;
            margin: 200px 0px 0px 780px;
            color: red;
        }

    </style>
    </head>
    <body>

        
        <div id="formWrapper">
            <div id="particles-js">
                <div class="btext">

                </div>
            </div>

  
            
            <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

            <script>
                particlesJS.load('particles-js', 'particles.json',
                        function () {
                            console.log('particles.json loaded...')
                        })
            </script>

            <?php if (isset($fmsg)) { ?><div class="alert fa" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

            <div id="form">

                <form class="logregform" method="post">
                    <div class="logo">
                        <h1 class="text-center head"><a href="../index.php"><img src="imgs/kclogod.png"></a></h1>
                        

                    </div>
                    <div class="form-item">
                        <p class="formLabel dds"></p>
                        <input type="email" name="email" placeholder="Email" value="" class="form-control form-style"/>
                    </div>
                    <div class="form-item">
                        <p class="formLabel dds"></p>
                        <input type="password" name="password" placeholder="Password" value="" class="form-control form-style"  />
                        <div class="clearfix space20"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <br>
                                <span class="remember-box checkbox">
                                    <label for="rememberme">
                                        <input type="checkbox" style="margin:0px 0px 0px 15px;" id="rememberme" name="rememberme">Remember Me
                                    </label>
                                </span>
                            </div>
                            
                            
                                               <div class="form-item">

                        <input type="submit" class="login pull-right" value="Log In">
                        <div class="clear-fix"></div>
                    </div>
                        </div>
                    </div>
 

                </form>
            </div>
        </div>
  
</body>
</html>




























