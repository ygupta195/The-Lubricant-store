<?php
  include 'server.php';
?>
<html>
    <head>
        <title>login</title>
        <script src="js\bt.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
          .container
          {
            position: relative;
            top: 166px;
            left: 162px;
          }
          #welcome
          {
            position: relative;
            left: 230px;
            top: -20px;
            font-size: 75px;
          }
          label{
            color: wheat;
          }

          p{
            position: relative;
            top: -26px;
            left: 416px;
          }
          .btn{
            position: relative;
            left: 186px;
             top: -12px;
          }
          #img1
          {
              background-attachment: fixed;
              background: url("loginback.jpg");
              background-repeat: no-repeat;
              width: 100%;
              background-size: cover;
              position: fixed;
          }
          #a1{
              color: brown;
          }
          #a1:hover{
              color: white;
          }
          h6{
            position:relative;
            top: 111px;
            left: 547px;
            font-size: 16px;
            color: darkolivegreen;
          }
          #btn{
            position: relative;
            top:-42px;
          }
          #none{
              color: black;
          }
          #er{
            position: relative;
            left: 968px;
            top: -95px;
            color:white;
            line-height: 51px;
          }
        </style>
    </head>
    <body id="img1">
        <div class="container1">
            <div class="container">
                    <h1 id="welcome">Welcome</h1>
                    <form class="form-horizontal" action="login.php" method="POST">
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="username">USERNAME:</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="text" placeholder="Enter username" name="username" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                        <div class="col-sm-5">          
                          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" >
                        </div>
                      </div>
                      <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label id="none"><input type="checkbox" name="remember"> Remember me</label>
                            <!-- <div>
                            <p><a id="a1" href="1-MainPage.html">Skip</a></p>
                          </div> -->
                          </div>
                        </div>
                      </div>
                      <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10 ">
                          <button type="submit" id="btn" class="btn btn-default" onclick="check()" name="login" >login</button>
                        </div>
                      </div>
                    </form>
                  </div>           
            </div>   
            <h6>don't have an account? <a id="a1" href="signup.php">signup</a> here</h6>
            <div id="er" >
                        <?php
                            foreach ($errors as $value)
                            {
                              echo "$value <br>";
                            }
                        ?>
            </div>
    </body>
</html>