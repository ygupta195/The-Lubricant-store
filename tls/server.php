<?php

$db=mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($db,'tls');

$errors=array();

if(isset($_POST['signup']))
{
    $username=$_POST['username'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $pwd=$_POST['pwd'];
    $rpwd=$_POST['rpwd'];
    $address=$_POST['address'];

    if(empty($username))
    {
        array_push($errors,"Enter UserID");
        
    }
    if(empty($fname))
    {
        array_push($errors,"Enter FirstName");
    }
    if(empty($lname))
    {
        array_push($errors,"Enter LastName");
    }
    if(empty($pwd))
    {
        array_push($errors,"Enter Password");
    }
    if(empty($rpwd))
    {
        array_push($errors,"Enter RePassword");
    }
    if(empty($address))
    {
        array_push($errors,"Enter Address");
    }
    if($pwd!=$rpwd)
    {
        array_push($errors,"Password do not Match");
    }
    foreach ($errors as $value)
    {
      echo $value;
    }
    if(count($errors)== 0)
    {
        $sql="INSERT INTO losi (losi.username,losi.fname,losi.lname,losi.pass,losi.address) VALUES ('$username','$fname','$lname','$pwd','$address')";
        mysqli_query($db,$sql);
        header('location:1-MainPage.html');
    }
}

if(isset($_POST['login']))
{
    $userid=$_POST['username'];
    $password=$_POST['pwd'];
    if(empty($userid))
    {
        array_push($errors,"Enter UserID");
        foreach ($errors as $value)
        {   
          echo $value;
        }
    }
    if(empty($password))
    {
        array_push($errors,"Enter Password");
    }
    if(count($errors)== 0)
    {
        echo "QWERTY";
        $query="SELECT * FROM losi WHERE losi.username='$userid' AND losi.pass='$password'";
        $result=mysqli_query($db,$query);
        if(mysqli_num_rows($result) == 1)
        {   

            header('location:1-MainPage.html');
        }
        else
        {
            array_push($errors,"Invalid Entries");
        }
    }
}

?>