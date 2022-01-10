<?php
// error_reporting(0);
include('includes/config.php');


        ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MNG | System </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/select2/select2.min.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('includes/topbar.php');?>
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('includes/leftbar.php');?>
                    <!-- /.left-sidebar -->

                    <div class="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Purchase Products</h2>

                                </div>

                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Admin |Control Panel</a></li>
                                        <li> Purchase</li>

                                    </ul>
                                </div>

                            </div>
                            <!-- /.row -->
                        </div>


                        <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Purchase</h5>
                                                </div>
                                            </div>
                                <form class="form-horizontal" method="post" style="margin-top:30px">
                                                <div class="form-group">
                                                  <label for="purchaseDate" class="col-sm-2 control-label"> Purchase Date <span>*</span></label>
                                                    <div class="col-sm-7">
                                        <input type="date" name="date" class="form-control" required="required">
                                                    </div>
                                                </div>
                                        <div class="form-group">
                                                    <label class="col-sm-2 control-label">Supplier Name<span>*</span></label>
                                                    <div class="col-sm-7">
                                        <input type="text" name="suplyer" class="form-control"  placeholder="Fill Supplier Name" required="required">
                                                    </div>
                                                </div>
												<div class="form-group">
                                                    <label class="col-sm-2 control-label">Product Name<span>*</span></label>
                                                    <div class="col-sm-7">
                                        <input type="text" name="product_name" class="form-control"  placeholder="Fill Product Name" required="required">
                                                    </div>
                                                </div>

                                                    <div class="form-group">
                                                    <label class="col-sm-2 control-label">Product Quantity<span>*</span></label>
                                                    <div class="col-sm-7">
                                        <input type="number" name="quantity" class="form-control"  placeholder="Fill Product Quantity" required="required">
                                                    </div>
                                                </div>

                                                    <div class="form-group">
                                                    <label class="col-sm-2 control-label">Product Price<span>*</span></label>
                                                    <div class="col-sm-7">
                                        <input type="text" name="price" class="form-control"  placeholder="Fill Product Price" required="required">
                                                    </div>
                                                </div>

    <div class="form-group">
                                                    <label class="col-sm-2 control-label">Stock Status<span>*</span></label>
                                                    <div class="col-sm-7">
                                        <select name="status" class="form-control">
                                           <option>Choose Stock Status</option> 
                                           <option>First In</option>
                                           <option>First Out</option>
                                        </select>
                                                    </div>
                                                </div>
    <div class="form-group">
                                                    <label class="col-sm-2 control-label">Carriage In Ward<span>*</span></label>
                                                    <div class="col-sm-7">
                                        <input type="number" name="carriage_in_ward" class="form-control"  placeholder="Fill Carriage In Ward" required="required">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-7">
                                                        <button type="submit" name="save" class="btn btn-warning" style="width:300px;margin-left:300px;">Purchase<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    </div></div>
			
		</form></div></div></div></div></div></div></div>
        <?php
        include"action.php";
purchase();
        ?>
			 <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
        <script src="js/prism/prism.js"></script>
        <script src="js/select2/select2.min.js"></script>
        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
    </body>
</html>
