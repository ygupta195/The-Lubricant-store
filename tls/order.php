<?php
    // session_start();
    
$conn=new mysqli("localhost","root","","tls");
if(mysqli_connect_error()){
    echo "Connection unsuccessfull";

}
else{
    // $username=$_SESSION['username'];
    $sql="SELECT * FROM orders";
    
    
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        echo "<table border='1'>
        <tr>
            <th>PID</th>
            <th>PNAME</th>
            <th>QTY</th>
            <th>PRICE</th>
            <th>UNIT</th>
            <th>AMOUNT</th>
            <th>Button</th>
        </tr>";
    
        while($row = mysqli_fetch_array($result))
        {
            $pid=$row['pid'];
            $pname=$row['pname'];
            $quantity=$row['quantity']; 
            $price=$row['price'];
            $unit=$row['unit'];
            $amt=$row['amt'];
            echo "<tr>";
                echo "<td>$pid</td>";
                echo "<td>$pname</td>";
                echo "<td>$quantity</td>";
                echo "<td>$price</td>";
                echo "<td>$unit</td>";
                echo "<td>$amt</td>";
                echo "<td><button id='cancel' name='$pid' onclick='remove($pid)'>cancel</button></td>";
            echo "</tr>";
        }
    echo "</table>";
    }
    else{
        echo"<p id='p2'>NO ORDERS YET</p>";
        echo"<p id='p2'>Give Us Chance To Serve You</p>";
        // echo"<p style='text-align:center;'><a href='2-Product.php'><button id='butt'>Products</button></a></p>";
    }
    $qrysum="SELECT SUM(orders.amt) As total FROM orders";
    $sumres = mysqli_query($conn,$qrysum);
    $sumrow = mysqli_fetch_array($sumres);
    $total=$sumrow['total'];
    if($total>0){
        echo "<p id='total'>Total Amount: Rs$total</p>";
        echo"<a href='checkout.php'><button id='check'>Place Order</button></a>";
        echo"<a href='2-Product.php'><button id='add'>Add more products</button></a>";       
    }
    else{
        // echo "<p id='total'>No items<p>";
        echo"<p style='text-align:center;'><a href='2-Product.php'><button id='butt'>Continue shopping</button></a></p>";
    }
} 
?>