         <?php
    $con=new mysqli("localhost","root","","iba_d")or die(mysqli_error());

    $sql1=$con->query("SELECT sum(TotalPrice) as total FROM returnoutward WHERE `date` BETWEEN '$a' AND '$b'")or die(mysqli_error());

    while ($row=mysqli_fetch_array($sql1)) {
        $t=$row['total'];
        
    }
     $sq=$con->query("SELECT sum(totalPrice) as sale FROM sales WHERE `date` BETWEEN '$a' AND '$b'")or die(mysqli_error());

    while ($r=mysqli_fetch_array($sq)) {
        $sale=$r['sale'];
       
        
    }
    $s=$con->query("SELECT sum(total) as ina FROM returninward WHERE `date` BETWEEN '$a' AND '$b'")or die(mysqli_error());

    while ($r1=mysqli_fetch_array($s)) {
        $in=$r1['ina'];        
    }
    $day=$con->query("SELECT sum(total_price) as total_price FROM day_in WHERE `date` BETWEEN '$a' AND '$b'")or die(mysqli_error());

    while ($dy=mysqli_fetch_array($day)) {
        $dn=$dy['total_pice'];
        
    }
     $doy=$con->query("SELECT sum(total_price) as total_price FROM day_out WHERE `date` BETWEEN '$a' AND '$b'")or die(mysqli_error());

    while ($do=mysqli_fetch_array($doy)) {
        $di=$do['total_pice'];
        
    }
     $cpd=$con->query("SELECT sum(amount) as amount FROM campanydrowing WHERE `date` BETWEEN '$a' AND '$b'")or die(mysqli_error());

    while ($cp=mysqli_fetch_array($cpd)) {
        $ce=$cp['amount'];
        
    }
    


         ?>