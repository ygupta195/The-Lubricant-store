<?php
$db=mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($db,"tls");

$id = $_POST['pid'];
$qryremove="UPDATE orders SET unit=unit-1, amt=amt-price WHERE orders.pid=$id";
$removeres=mysqli_query($db,$qryremove);
$qrydelete="DELETE FROM orders WHERE orders.unit=0";
$deleteres=mysqli_query($db,$qrydelete);
?>