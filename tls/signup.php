<?php
  include 'server.php';
?>
<html>
    <head>
        <title>SignUp</title>
        <!-- <script src="js\bt.js"></script> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
          .container
          {
            position: relative;
            top: 42px;
            left: 124px;
          }
          #welcome
          {
            position: relative;
            left: 95px;
            top: -20px;
            font-size: 75px;
            color: cornflowerblue;
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
              color: black;
          }
          #a1:hover{
              color: white;
          }
          label{
                color: whitesmoke;
          }
          #btn
          {
                position: relative;
                top:10px;
          }
          #en{
              position:relative;
              position: relative;
              top: -350px;
              left: 684px;
              line-height: 49px;
              color: white;
          }
        </style>
    </head>
    <body id="img1">
        <div class="container1">
            <div class="container">
                    <h1 id="welcome">Welcome to SignUp</h1>
                    <form class="form-horizontal" action="signup.php" method="POST" >
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="username">USERNAME:</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="text" placeholder="Enter username" name="username" >
                        </div>
                      </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="firstname">FIRST NAME:</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" id="text" placeholder="Enter First name" name="fname" >
                          </div>
                        </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="lastname">LAST NAME:</label>
                              <div class="col-sm-5">
                                <input type="text" class="form-control" id="text" placeholder="Enter Last Name" name="lname" >
                              </div>
                            </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">PASSWORD:</label>
                        <div class="col-sm-5">          
                          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" >
                        </div>
                      </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="rpwd">CONFIRM-PASSWORD:</label>
                          <div class="col-sm-5">          
                            <input type="password" class="form-control" id="rpwd" placeholder="Re-enter password" name="rpwd" >
                          </div>
                        </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="address">ADDRESS:</label>
                              <div class="col-sm-5">
                                <input type="text" class="form-control" id="text" placeholder="Enter Address" name="address" >
                              </div>
                            </div>
                                <!-- <div class="form-group">
                                  <label class="control-label col-sm-2" for="lastname">PINCODE:</label>
                                  <div class="col-sm-5">
                                    <input type="text" class="form-control" id="text" placeholder="Enter Pincode" name="pin" >
                                  </div>
                                </div> -->
                      <!-- <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label><input type="checkbox" name="remember"> Remember me</label>
                             <div>
                            <p><a id="a1" href="E:/RMS/1-MainPage.html">Skip</a></p>
                          </div>
                          </div>
                        </div>
                      </div> -->
                      <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                          <button  id="btn" type="submit" class="btn btn-default"  name="signup" >SignUp</button>
                        </div>
                      </div>
                      <div id="en" > 
                        <?php
                            foreach ($errors as $value)
                            {
                              echo "$value <br>";
                            }
                          ?>
                      </div>
                    </form>
                  </div>           
            </div>
    </body>
</html>