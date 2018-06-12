<?php
       $conn=new mysqli("localhost","root","","tls");
       if(mysqli_connect_error())
       {
        echo "Connection unsuccessfull";
    
        }
        else
        {
                if(isset($_POST['ord1']))
                {
                        $q="SELECT * FROM engineoil WHERE pid='eo1'";
                        $result=$conn->query($q);
                         if($result->num_rows>0)
                        {
                                $row=$result->fetch_assoc();
                                $pd=$row["pid"];
                                $n=$row["pname"];
                                $quan=$row["quantity"];
                                $pr=$row["price"];
                                $query="INSERT INTO orders(orders.pid,orders.pname,orders.quantity,orders.price) VALUES ('$pd','$n','$quan','$pr') ";
                                header('location:order.php');
                        }
                        else
                        {
                                $error="unsucessfull";
                                // echo($error);
                        }        
                
                }
        }
?>
