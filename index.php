<?php
session_start();
error_reporting(0); 
include('application/includes/config.php');
if (isset($_REQUEST['login'])) {
    $username=$_REQUEST['username'];
    $password=md5($_REQUEST['password']);
    $_SESSION['username']=$username;
   
        
  $edc=$con->query("SELECT * FROM users WHERE username='$username' AND password='$password'")or die(mysqli_error());
  $sql=mysqli_num_rows($edc);
  if($sql>0){
    if($username=="Admin"){

    
    echo "<script>alert('Welcome Super Admin');window.location.replace('application/dashboard.php')</script>";
}
   elseif($username=="Other"){
    echo "<script>alert('Employee Enjoy To use!!!');window.location.replace('users/dayin.php')</script>";

}
else{
    echo "<script>alert('please try again!!!');window.location.replace('index.php')</script>";

}
}}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MNGS | Signin Page</title>
        <link rel="stylesheet" href="application/css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="application/css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="application/css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="application/css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="application/css/main.css" media="screen" >
        <script src="application/js/modernizr/modernizr.min.js"></script>
    </head>
    <body style="background:#4bd786;">
        <div class="container">
                    <div class="col-lg-7" style="margin-left:250px;">
                        <section class="section">
                            <div class="row mt-40">
                                <div class="col-md-10 col-md-offset-1 pt-50">

                                    <div class="row mt-30 ">
                                        <div class="col-md-11">
                                            <div class="panel ">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                        <h4 style="font-family:sentic;color:#4a6e7c">MNGS | Management System Sign-in</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">


                                                    <form class="form-horizontal" method="post">
                                       
                                                        <div class="form-group" style="margin-left:30px">
                                                            <!-- <label for="inputEmail3" class="col-sm-2 control-label">School Name</label> -->
                                                            <div class="col-sm-10">
                                                        <input type="text" name="username" class="form-control" id="inputusername" placeholder="Username">
                                                            </div>
                                                        </div>
                                                        <div class="form-group" style="margin-left:30px">
                                                            <!-- <label for="inputPassword3" class="col-sm-2 control-label">Password</label> -->
                                                            <div class="col-sm-10">
                                                                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                            </div>
                                                        </div>

                                                        <div class="form-group mt-20">
                                                            <div class="col-sm-offset-2 col-sm-10">

                                                                <button type="submit" name="login" class="btn btn-warning btn-labeled pull-right">Sign in<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                            </div>
                                                        </div>
                                                    </form>




                                                </div>
                                            </div>
                                            <!-- /.panel -->
                                            <p class="text-muted  text-center" style="color:white;"><small> © MNGS | 2021
                                        </div>
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>

                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="application/js/jquery/jquery-2.2.4.min.js"></script>
        <script src="application/js/jquery-ui/jquery-ui.min.js"></script>
        <script src="application/js/bootstrap/bootstrap.min.js"></script>
        <script src="application/js/pace/pace.min.js"></script>
        <script src="application/js/lobipanel/lobipanel.min.js"></script>
        <script src="application/js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->

        <!-- ========== THEME JS ========== -->
        <script src="application/js/main.js"></script>
        <script>
            $(function(){

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>