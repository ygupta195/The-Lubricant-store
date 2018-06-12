<?php
session_start();
if(isset($_POST['submit1'])){
    $username=$_SESSION['username'];
    $conn=new mysqli('localhost','root','','traveltia');
    $query="DELETE FROM book1 WHERE username='$username' and hotel='Sinq Edge'";
    if($conn->query($query)){
        header("Location:Home.html");
    }
    else{
        echo"failed";
    }

}
?>