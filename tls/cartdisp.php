<?php
        $db=mysqli_connect("localhost","root","") or die("Unable to connect");
        mysqli_select_db($db,'panda');

        $qrydisp="SELECT * FROM cart";
        $dispres = mysqli_query($db,$qrydisp);
        if(mysqli_num_rows($dispres)>0)
        {
            echo "<table border='1'>
            <tr>
                <th>PID</th>
                <th>PNAME</th>
                <th>RATE</th>
                <th>QTY</th>
                <th>AMT</th>
                <th>CANCEL</th>
            </tr>";
        }
    
            while($row = mysqli_fetch_array($dispres))
            {
                $pid=$row['pid'];
                $pname=$row['pname'];
                $rate=$row['rate']; 
                $qty=$row['qty'];
                $amt=$row['amt'];
                echo "<tr>";
                    echo "<td>$pid</td>";
                    echo "<td>$pname</td>";
                    echo "<td>$rate</td>";
                    echo "<td>$qty</td>";
                    echo "<td>$amt</td>";
                    echo "<td><button id='cancelbtn' name='$pid' onclick='remove($pid)'>cancel 1</button></td>";
                echo "</tr>";
            }
        echo "</table>";
        
        $qrysum="SELECT SUM(cart.amt) As total FROM cart";
        $sumres = mysqli_query($db,$qrysum);
        $sumrow = mysqli_fetch_array($sumres);
        $total=$sumrow['total'];
        if($total>0){
            echo "<p id='total'>Total Amount: Rs$total</p>";
            echo "<p id='finish'><a href='cartpass.php'>Pay And Checkout</a></p>";         
        }
        else{
            echo "<p id='total'>No items in the Cart<p>";
        }
?>