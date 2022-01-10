<?php 
function purchase(){
$ne=new mysqli("localhost","root","","iba_d")or die(mysqli_error());
if (isset($_POST['save'])) {
	$a=$_POST['date'];
	$b=$_POST['suplyer'];
	$c=$_POST['product_name'];
	$d=$_POST['quantity'];
	$e=$_POST['price'];
	$f=$_POST['status'];
	$car=$_POST['carriage_in_ward'];
	$tt=$e * $d;

	$sql=$ne->query("INSERT INTO purchase VALUES('','$a','$b','$c','$d','$e','$f','$car','$tt')")or die(mysqli_error());

	$q=$ne->query("SELECT * FROM products WHERE product_name='$c'")or die(mysqli_error());
	$r=mysqli_fetch_array($q);
	if ($c==$r['product_name']) {
		$t=$r['quantity']+$d;
		$up=$ne->query("UPDATE products SET quantity ='$t',price='$e' WHERE product_name='$c'")or die(mysql_error());
		echo "<script>alert('Process To Purchase Well Done!!!');window.location.replace('purchase.php')</script>";


	}
	else{
	$sql1=$ne->query("INSERT INTO products VALUES('','$c','$d','$e')")or die(mysqli_error());

		echo "<script>alert('Process To Purchase Was  Done Well!!!');window.location.replace('purchase.php')</script>";

	}
}
}
function returnOutward(){
$ne=new mysqli("localhost","root","","iba_d")or die(mysqli_error());
	
	if (isset($_POST['returnout'])) {
	$a=$_POST['purchaseDate'];
	$date=$_POST['date'];
	$b=$_POST['suplyerName'];
	$c=$_POST['productName'];
	$d=$_POST['quantity'];
	$e=$_POST['price'];
	$f=$_POST['status'];
	$tic=$_POST['Ticket'];
	$total=$e*$d;

	$sql=$ne->query("INSERT INTO returnoutward VALUES ('','$a','$date','$b','$c','$d','$e','$f','$tic','$total')")or die(mysql_error());
if($sql==true){

		echo "<script>alert('Process To Return Well Done!!!');window.location.replace('returnOutward.php')</script>";
	}
	else{

		echo "<script>alert('Process To Return Was Not Done!!!');window.location.replace('returnoutward.php')</script>";

	}
}
}
function Supplier()
{
$ne=new mysqli("localhost","root","","iba_d")or die(mysqli_error());
$sql=$ne->query("SELECT suplyer FROM purchase")or die(mysqli_error());
while ($r=mysqli_fetch_array($sql)) {
	echo"<option>".$r["suplyer"]."</option>";
}
	
}
function returnInward(){
$ne=new mysqli("localhost","root","","iba_d")or die(mysqli_error());

	if (isset($_POST['returnin'])) {
		$date=$_POST['purchaseDate'];
	$a=$_POST['date'];
	$b=$_POST['suplyer'];
	$c=$_POST['product_name'];
	$d=$_POST['quantity'];
	$e=$_POST['price'];
	$f=$_POST['status'];
	$t=$e*$d;
	$sql=$ne->query("INSERT INTO returninward VALUES('','$date','$a','$b','$c','$d','$e','$f','$t')")or die(mysqli_error());
	if ($sql==true) {
		echo"<script>alert('new return in ward is registered well!!!')</script>";

	}
	else{
		echo"<script>alert('new return in ward was not registered well!!!')</script>";

	}
}
}
function sales(){
$ne=new mysqli("localhost","root","","iba_d")or die(mysqli_error());

if (isset($_POST['sales'])) {
	$p=$_POST['purchaseDate'];
	$a=$_POST['productName'];
	$b=$_POST['reason'];
	$w=$_POST['quantity'];
	$c=$_POST['price'];
	$d=$_POST['status'];
	$t=$c * $w;
	$q=$ne->query("SELECT * FROM products WHERE product_name='$a'")or die(mysqli_error());
	$r=mysqli_fetch_array($q);
		if ($w>$r['quantity']) {
		echo"<script>alert('Please this quantity greathern you have')</script>";
	}
	else{
	if ($a==$r['product_name']) {
		$tr=$r['quantity']-$w;
		$up=$ne->query("UPDATE products SET quantity='$tr' WHERE product_name='$a'")or die(mysqli_error());
		$sql=$ne->query("INSERT INTO sales VALUES('','$p',now(),'$a','$b','$w','$c','$d','$t')")or die(mysqli_error());
		echo"<script>alert('Proccess to sales success done well');window.location.replace('sales.php')</script>";
	}
	else{
		echo"<script>alert('Proccess to sales was not done well');window.location.replace('sales.php')</script>";

	}
}}
}
function campanyDrowing(){
$ne=new mysqli("localhost","root","","iba_d")or die(mysqli_error());

	if (isset($_POST['save'])) {
	
	$a=$_POST['employeName'];
	$b=$_POST['reason'];
	$c=$_POST['amount'];
	$sql=$ne->query("INSERT INTO campanydrowing VALUES('','$a','$b','$c',now())")or die(mysqli_error());
	if ($sql==true) {
		echo"<script>alert('New Campany Drowing Success To Record!!!')</script>";

	}
	else{
		echo"<script>alert('Something Wrong Please Try Again!!!')</script>";

	}
}
}
function selfDrowing(){
$ne=new mysqli("localhost","root","","iba_d")or die(mysqli_error());

	if (isset($_POST['save'])) {
	
	$a=$_POST['ownerName'];
	$b=$_POST['reason'];
	$c=$_POST['amount'];
	$sql=$ne->query("INSERT INTO selfdrowing VALUES('','$a','$b','$c',now())")or die(mysqli_error());
	if ($sql==true) {
		echo"<script>alert('New Self Drowing Success To Record!!!')</script>";

	}
	else{
		echo"<script>alert('Something Wrong Please Try Again!!!')</script>";

	}
}
}


?>