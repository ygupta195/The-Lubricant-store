<?php

$db=mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($db,'tls');

    $id = $_POST['pid'];
    $qryfind="SELECT * FROM transmissionoil WHERE pid=$id";
    $findres=mysqli_query($db,$qryfind);
    $findrow=mysqli_fetch_assoc($findres);
    $pid=$findrow[pid];
    $pname=$findrow[pname];
    $quantity=$findrow[quantity];
    $price=$findrow[price]; 
    $qrycheck="SELECT orders.pid FROM orders WHERE orders.pid=$pid";
    $checkres=mysqli_query($db,$qrycheck);
    if(mysqli_num_rows($checkres)>0)
    {
        $qryadd="UPDATE orders SET orders.unit=orders.unit+1, orders.amt=orders.amt+$price WHERE orders.pid=$pid";
        mysqli_query($db,$qryadd);  
    }
    else
    {
        $qryinsert="INSERT INTO orders (orders.pid,orders.pname,orders.quantity,orders.price,orders.unit,orders.amt) VALUES ($pid,'$pname','$quantity',$price,1,$price)";
        mysqli_query($db,$qryinsert); 
    }
    // $qryupdate="UPDATE sales SET unit=unit+1 WHERE sales.pid=$id";
    // mysqli_query($db,$qryupdate);

?>
