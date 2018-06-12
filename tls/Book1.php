<?php
 session_start();
 $error='';
if(isset($_POST['submit'])){

 $username=$_SESSION['username'];
 $hotel="Sinq Edge";
 $place="Goa";
 $date=$_POST['date1'];
 $price="10000/day";
 $conn = new mysqli('localhost', 'root','','traveltia');
 $q=mysqli_query($conn, "SELECT * from book1 WHERE date='$date' AND hotel='Sinq Edge'");
 $rows=mysqli_num_rows($q);
 if($rows==1)
 {
   $error="Room not available for this date:(";
   echo "Room not available for this date:(";
 }
 else{
 $query = "INSERT INTO book1(username,hotel,place,date,price) VALUES ('$username','$hotel','$place','$date','$price')";

        if($conn->query($query)){ // Redirecting to other page
          header("Location:Home.html");
        }
          else
        
          {
        $error = "Username or Password is Invalid";
        }
          mysqli_close($conn); 
 
  } }
 ?>