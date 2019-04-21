<?php

require 'include/connection.php';

  

              if(isset($_POST['login'])) {
                // username and password sent from form 
                
                $email = $_POST['email'];
                $mypassword = $_POST['psw']; 
                
                echo $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$mypassword'";
                $result = runQuery($sql);
                if($result){
                  $count = rowCount($result);
                  if($count == 1) {
                    $_SESSION['login_user'] = $email;
                    echo "<script>alert('Logged in Successfully')</script>";
                  }else {
                    $error = "Your Login Name or Password is invalid";
                    echo "<script>alert('Wrong Email/Password')</script>";
                  }
                }
                
                
            }
?>
<style>
  .bg-img {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
  }

  .bg-img,
  .bg-img>*,
  .bg-img *,
    {
    box-sizing: border-box;
  }

  .bg-img {
    /* The image used */
    background-image: url("rog.jpg");

    min-height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  }

  /* Add styles to the form container */
  .bg-img .container {
    position: left;
    height: 50%;
    right: 0;
    margin: 0px;
    width: 100%;
    padding: 16px;
    background-color: white;
    opacity: 0.7;
  }

  /* Full-width input fields */
  .bg-img input[type=text],
  input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
  }

  .bg-img input[type=text]:focus,
  input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }

  /* Set a style for the submit button */
  .bg-img .btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }

  .bg-img .btn:hover {
    opacity: 1;
  }
</style>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="images/pop.png" height="150" width="150"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <!-- <li><a href="buy.php">BUY</a></li> -->
        <!-- <li><a href="sell.php">SELL</a></li> -->
        <li><a href="RENT.php">RENT</a></li>
        <li><a href="contactus.php">CONTACT</a></li>
        <li><a href="aboutus.php">ABOUT</a></li>

        <li><a href="#" data-toggle="modal" data-target="#register">REGISTER</a></li>
        <?php 
        if(isset($_SESSION["login_user"])){
          echo '<li><a href="logout.php">Logout</a></li>';
        }
        else{
          echo '<li><a href="#" data-toggle="modal" data-target="#login">LOGIN</a></li>';
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog" style="padding-top:90px">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <div class="bg-img">
          <form method="post" action="<?php $_PHP_SELF ?>" class="container">
            <h2>Login Here!!</h2>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <button type="submit" name="login" class="btn">Login</button>
          </form>
           
            
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="register" class="modal fade" role="dialog">
  <div class="modal-dialog" style="padding-top:90px">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <div class="bg-img">
          <form action="<?php $_PHP_SELF ?>" method="POST" class="container">
            <h2>Register Now!!</h2>
            <hr>
            <label for="email"><b>Name</b></label>
            <input type="text" placeholder="Full Name" name="name" required>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <label for="psw"><b>Confirm Password</b></label>
            <input type="password" placeholder="Re-enter Password" name="confirmpsw" required>
            <button name="register" type="submit" class="btn">Login</button>
          </form>
        </div>
        <?php
         if(isset($_POST['register'])) {
           $name = $_POST['name'];
           $email = $_POST['email'];
           $psw = $_POST['psw'];
           $confirmpsw = $_POST['confirmpsw'];
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            if($psw == $confirmpsw)            {
              $sql = "INSERT INTO users (name, email ,password) VALUES ('$name', '$email', '$psw')";
              if(mysqli_query($conn, $sql)){
                  echo "<script>alert('User Registered Successfully')</script>";
              } else{
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
              }
            mysqli_close($conn);
          }
          else{
            echo "<script>alert('Password Does not Match')</script>";
          }
         }
      ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
