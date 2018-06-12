<!-- <html>
    <head>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script>
        function book(id) {
            if (confirm('Are you sure')) {
                $.post('menuser.php', { pid: id });
                alert('item added to cart');
            }
        }
    </script>
        <style>
                table{
                    border-collapse:collapse;
                    background-color:white;
            }
            th, td {
                border: 1px solid black;
                position: relative;
                bottom: 4px;
                right: -5px;
                width: 234px;
                text-align: center;
                height: 57px;
            }                }
            h3{
                position:relative;
                bottom:-60px;
                right:-170px;
            }
        </style>
    </head>
    <body> -->
    <?php
    // session_start();
    
$conn=new mysqli("localhost","root","","tls");
if(mysqli_connect_error()){
    echo "Connection unsuccessfull";

}
else{
    // $username=$_SESSION['username'];
    $sql="SELECT * FROM  grease";
    
    
    $result=$conn->query($sql);
    if($result->num_rows>0){
        // echo"<table><tr><th>pid</th><th>pnakkme</th><th>quantity</th><th>price</th><th>as</th></tr>";
        // while($row=$result->fetch_assoc())
        // {
        //     $lol=$row['pid'];
        //     echo"<tr><td>".$row["pid"]."</td><td>".$row["pname"]."</td><td>".$row["quantity"]."</td><td>".$row["price"]."</td><td><button type='submit' name='$lol' onclick='book($lol)'>Order</button></td></tr>";
        // }
        // echo"</table>";
        echo "<table border='1'>
        <tr>
            <th>PID</th>
            <th>PNAME</th>
            <th>QTY</th>
            <th>PRICE</th>
            <th>Button</th>
        </tr>";
    
        while($row = mysqli_fetch_array($result))
        {
            $pid=$row['pid'];
            $pname=$row['pname'];
            $quantity=$row['quantity']; 
            $price=$row['price'];
            echo "<tr>";
                echo "<td>$pid</td>";
                echo "<td>$pname</td>";
                echo "<td>$quantity</td>";
                echo "<td>$price</td>";
                echo "<td><button id='bookbtn' name='$pid' onclick='book($pid)'>ORDER</button></td>";
            echo "</tr>";
        }
    echo "</table>";
    }
    else{
        echo"0 RESULTS ";
    }
} 
?> 

<!-- 
<h3>YOUR BOOKING IS SUCCESSFUL </h3>
<form method="post">
<input id="book" type="submit" name="submit" value="Cancel"> -->
<!-- </form>
    </body>

</html>

 -->




