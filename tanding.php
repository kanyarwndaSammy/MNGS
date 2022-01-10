
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MNGS | System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
          <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
    </head>
    <body ><div class="content-wrapper">
        <?php include"includes/topbar.php"; ?>
                <div class="content-container">

                                      <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Check profit & Loss Account</h2>

                                </div>
  <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Admin|Control Panel</a></li>
            							<li class="active">Profit | Loss</li>
            						</ul>
                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                         <section class="section">
                            <div class="container-fluid">



                                <div class="row">
                                    <div class="col-md-12" >

                                        <div class="panel">
                                            <div class="panel-heading">

                                            <div class="panel-body p-6" style="font-family:auto;">
                                            	 <form class="form-horizontal" method="post" style="margin-top:30px">
                                                <div class="form-group">
                                                  <label for="purchaseDate" class="col-sm-2 control-label"> Start Date <span>*</span></label>
                                                    <div class="col-sm-7">
                                        <input type="date" name="startDate" class="form-control" required="required">
                                                    </div>
                                                </div>
                                                  <div class="form-group">
                                                  <label for="purchaseDate" class="col-sm-2 control-label"> End Date <span>*</span></label>
                                                    <div class="col-sm-7">
                                        <input type="date" name="endDate" class="form-control" required="required">
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-7">
                                                        <button type="submit" name="save" class="btn btn-warning" style="width:300px;margin-left:300px;">Check<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    </div></div>
                                                </form></div></div></div>
                                                <?php
                                                error_reporting(0);
if (isset($_POST['save'])) {
	$con=new mysqli("localhost","root","","iba_d")or die(mysqli_error());
	$a=$_POST['startDate'];
	$b=$_POST['endDate'];
include("select.php");


	?>
	 <div class="row">
                                    

                                        <div class="panel">
                                            <div class="panel-heading">

                                            <div class="panel-body p-6" style="font-family:auto;">
		<center><h3 style="color:#bac567"><i>ACCOUNT OF PROFIT AND LOSS DATE BETWEEN <?php echo $a; ?> & <?php echo $b; ?></i></h3></center>
		<?php
	$sql=$con->query("SELECT sum(total_price) as price,sum(carriage_in_ward) as car FROM purchase WHERE `date` BETWEEN '$a' AND '$b'")or die(mysqli_error());

	while ($row=mysqli_fetch_assoc($sql)) {
		$sum =$row['price'];		
		$car=$row['car'];
		$tr=$sum - $car;
	}

		 ?>
<H5>Purchases</H5>
                                                <table  class="display table table-striped table-bordered" cellspacing="0" width="100%"  >
                                                    
                                                        <tr>
                                                            <th>Purcahse</th>
                                                            <th>Carriage In Wards</th>
                                                            <th>ReturnOutWard</th>
                                                            <th>good available for sale</th>
                                                          

                                                       
                        
                                                        </tr>

                                                    	<tr>
                                                    		
<td><?php echo $sum."&nbsp"."RWF"; ?></td>
<td><?php echo $car."&nbsp"."RWF"; ?></td>
<td><?php
include("select.php");

  $ee=$tr-$t; echo $t."&nbsp"."RWF"; ?></td>

                                                    		<td><?php echo $ee."&nbsp"."RWF";?></td>
                                                                               


                                                    	</tr>
                                                    </table>
                                                    <H5>Sales</H5>
                                                <table  class="display table table-striped table-bordered" cellspacing="0" width="100%"  >
                                                    <tr>
                                                        <th>Sales Products</th>
                                                        <th>ReturnInWard</th>
                                                        <th>Total Sales</th>
                                                    </tr>
                                                    <tr>
<td><?php echo $sale."&nbsp"."RWF"; ?></td>
<td><?php echo $in."&nbsp"."RWF"; ?></td>

<td><?php 
    $res=$sale-$in;

 echo  $res."&nbsp"."RWF"; ?></td>


                                                        
                                                    </tr>
                                                </table>
                                                                                                  <H5>Day Work In</H5>
                                                <table  class="display table table-striped table-bordered" cellspacing="0" width="100%"  >
                                                    <tr>
                                                        <th>Day Work In</th>
                                                        <th>Day Work Out</th>
                                                        <th>Total Price</th>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo $dn."&nbsp"."RWF"; ?></td>
                                                        <td><?php echo $di."&nbsp"."RWF"; ?></td>
                                                        <td><?php $ttt=$dn + $di; echo $ttt."&nbsp"."RWF"; ?></td>

                                                    </tr>
</table>

<h5>Profit | Loss Of Stock Product</h5>
<table  class="display table table-striped table-bordered" cellspacing="0" width="100%"  >
<tr>
    <th>net sales</th>
    <th>good available for sale</th>
    <th>Profit Or Loss</th>
    <th>Drowings</th>
</tr>
<tr>
    <td><?php echo  $res."&nbsp"."RWF"; ?></td>
    <td><?php echo $ee."&nbsp"."RWF";?></td>
    <?php
    $pl=$res - $ee;
if ($pl >$ee) {
    echo "<td>"."<span style='font-size:20px'>"."well you get Profit work hard"."&nbsp"."&nbsp".$pl."&nbsp"."RWF</span>"."</td>";
}
else{
    echo "<td>"."<span style='font-size:20px'>"."you get loss what's wrong??? "."&nbsp"."&nbsp".$pl."&nbsp"."RWF</span>"."</td>";

}
     ?>
     <?php
       $sd=$con->query("SELECT * FROM selfdrowing WHERE `date` BETWEEN '$a' AND '$b'")or die(mysqli_error());

    while ($sd=mysqli_fetch_array($sd)) {
        $se=$sd['amount'];
        
    }
 $all=$pl + $ttt;
 $dro=$ce+ $se;
 $try=$all-$dro;
 if ($all>$dro) {
     echo "<td>"."<span style='font-size:20px'>well you good position never give up"."&nbsp".$try."&nbsp"."RWF</span>"."</td>";
 }
 else{
     echo "<td>"."<span style='font-size:20px'>please your bussiness is not good position"."&nbsp".$try."&nbsp"."RWF</span>"."</td>";

 }
      ?>
 

</tr>
    </table>
	</div></div></div></div>
	<?php
}?></div></div></div></section></div></div></div></div>
 <div class="row">
                                    

                                        <div class="panel">
                                            <div class="panel-heading">

                                            <div class="panel-body p-6" style="font-family:auto;">
                                                <center><h3 style="color:#bac567">Analysis Your Profit Manage Per %</h3></center>
                                                <table  class="display table table-striped table-bordered" cellspacing="0" width="100%"  >
<tr>
    <th>Tax 5%</th>
    <th>Payllor 10%</th>
    <th>Project Of Campany 21%</th>
    <th>Production Of Campany 64%</th>
</tr>
<tr>
    <td><?php $tax=($try*5)/100; echo"that is tax you have to pay"."&nbsp".$tax."&nbspRWF"; ?></td>
    <td><?php $pay=($try*10)/100; echo"that is employee sallary you have to pay"."&nbsp".$pay."&nbspRWF"; ?></td>
    <td><?php $prj=($try*21)/100; echo"that is money of any project of campany"."&nbsp".$prj."&nbspRWF"; ?></td>
    <td><?php $reserv=$try-($tax+$pay+$prj); echo"that is profit of campany"."&nbsp".$reserv."&nbspRWF"; ?></td>



</tr>

                                                     <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/DataTables/datatables.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "100%",
                    "scrollCollapse": true,
                    "paging":         false,

                } );

                $('#example3').DataTable();
            });
        </script>
    </body>
</html>
