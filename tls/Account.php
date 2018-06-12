<html>

<head>
    <title>The Lubricant Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script>
        function remove(id) {
            if (confirm('Are you sure')) 
            {
                $.post('orddel.php', { pid: id });
                alert('item deleted from cart');
                location.reload();
            }
        }
    </script>

    <style>
        .ali {
            position: relative;
            top: 21px;
            margin-top: 130px;
            margin-left: 9px;
            padding: 10px;
            font-size: 20px;
        }

        #po li {
            line-height: 31px;

        }

        #p2{
                font-size:30px;
                margin-left: 10px;
                text-align:center;
        }
        #butt{
            padding: 10px;
            border-radius: 10px;
            background-color: #FFAB00;
            border: 2px solid #FFA400;
            cursor: pointer;
        }
        .heading {
            font-size: 30px;
            color: grey;
            position: relative;
            bottom: -122px;
            padding: 10px;
        }

        .tls {
            position: relative;
            top: -137px;
            right: -191px;
            font-size: 56px;
            font-family: sans-serif;
            text-shadow: 10px 0px 8px dimgrey;

        }

        #div1 {
            background: linear-gradient(to left, rgb(112, 114, 110), rgb(15, 15, 14));
            height: 30px;
            box-shadow: 4px 0px 10px black;
            position: relative;
            top: -7px;
            left: -9px;
            width: 102%;
        }

        h1 {
            font-family: bold;
            color: black;
            text-shadow: 10px 0px 8px yellowgreen;
            padding: 10px;
            font-size: 50px;
            position: relative;
            right: -166px;
            top: -109px;
        }

        #img1 {
            position: relative;
            left: 28px;
            height: 100px;
            width: 136px;
            top: -8px;
        }

        #p {
            font-style: italic;
            font-size: 20px;
            color: black;
            text-shadow: 6px 0px 8px black;
            position: relative;
            top: -185px;
            left: 215px;
        }

        #ul1 li {
            list-style-type: none;
            display: inline;
            text-align: center;
            padding: 9px;
            margin-left: 247px;
            position: relative;
            top: 10px;
            left: -165px;
        }

        #ul1 {
            border: 1px solid black;
            position: relative;
            width: 102%;
            top: 174px;
            right: 68px;
            text-align: center;
            background: linear-gradient(to left, rgb(112, 114, 110), rgb(15, 15, 14));
            height: 40px;
        }
        #check{
            width: 18%;
            padding: 12px;
            margin: 10px 10px 20px 350px;
            background-color: burlywood;
            cursor: pointer;
        }
        #add{
            width: 18%;
            padding: 12px;
            margin: 10px 10px 20px 190px;
            background-color: burlywood;
            cursor: pointer;
        }
        #p1 {
            padding: 12px;
            /* padding-left: 16px; */
            text-align: center;
            font-family: cursive;
        }

        #a1:active {
            color: blue;
        }

        #a1:link {
            color: blue;
            text-decoration: none;
        }

        #a1:visited {
            color: white;
            text-decoration: none;
        }

        #a1:hover {
            color: blue;
            text-decoration: none;
        }

        body {
            background-image: url(aback.jpg), url(head.png);
            width: 100%;
            background-repeat: no-repeat, no-repeat;
            /* background-position-x: 100px; */
            background-position-y: 208px, 22px;
            background-size: 100% 986px, 100% 29%;
            /* background-attachment: fixed,fixed; */
            margin: 0px;
        }
        table{
                    border-collapse:collapse;
                    background-color:cornsilk;
                    margin: 40px;
                    border: 2px solid burlywood;
            }
            th, td {
                position: relative;
                bottom: 4px;
                right: -5px;
                border: 5px solid bisque;
                width: 234px;
                text-align: center;
                height: 57px;
            }             
        #up {
            position: relative;
            right: -1162px;
            top: -45px;
            word-spacing: 19px;
        }

        #up li {
            display: inline;
        }

        #c1 {
            background-color: blanchedalmond;
            border: 1px solid black;
            width: 284px;
            margin-left: 1px;
            /* position: relative;
            top: 366px;
            left: 105px; */
            line-height: 24px;
        }

        footer {
            padding: 20px;
            background: linear-gradient(to bottom, rgb(26, 25, 25), black);
            color: white;
            text-align: center;
            margin: auto;
        }

        footer div {
            padding: 27px 86px 10px 144px;
            display: inline-block;
        }

        footer #media a {
            padding: 10px;
            font-size: 20px;
            width: 20px;
            text-decoration: none;
            border-radius: 50%;
            background: grey;
        }
        header{
                height: 209px;
        }
        #cancel{
            border-radius: 14px;
            background-color: bisque;
            border: 0px solid red;
            padding: 11px;
        }
        #sp{
                font-size:50px;
                padding:40px;
        }
        #total{
            background-color: antiquewhite;
            text-align: center;
            padding: 14px;
        }
    </style>
</head>

<body>
    <header>
        <div id="div1">
            <ul id="ul1">
                <li>
                    <a id="a1" href="1-MainPage.html">Home</a>
                </li>
                <li>
                    <a id="a1" href="2-Product.php">Products</a>
                </li>
                <li>
                    <a id="a1" href="#">Contact Us</a>
                </li>
                <li>
                    <a id="a1" href="3-Aboutus.html">About Us</a>
                </li>
            </ul>

            <a href="1-MainPage.html">
                <img id="img1" src="logotls.png" alt="logo">
            </a>
            <h2 class="tls">The Lubricant Store</h2>
            <p id="p">where the trust lies.........</p>
        </div>
        <ul id="up">
            <li>
                <a id="a1" href="Account.php">Account</a>
            </li>
            <li>
                <a id="a1" href="login.php">LogOut</a>
            </li>
        </ul>
        </header>
        <?php
            include 'order.php';
        ?>
</body>
<footer>
    <div id="info">
        &copy The Lubricant Store 2017
        <br> Developer: YASH GUPTA
        <br> 9108906823
        <br> yash.beis.15@acharya.ac.in
        <br>
    </div>
    <div id="media">
        <p>
            FOLLOW US:
        </p>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-envelope"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-google-plus"></a>
        </p>
    </div>
    <div>
        CONTACT US:
        <br> tlsl@gmail.com
        <br> Mumbai 400020
        <br> Maharashtra India
    </div>
</footer>

</html>