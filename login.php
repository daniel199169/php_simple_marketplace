<?php
 
  include "include/config.php";
  
  if(isset($_POST["email"]) && isset($_POST["pwd"]) && $_POST["email"]!="" && isset($_POST["pwd"])!=""){
    
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    $query = "SELECT * FROM user WHERE email = '$email' and password = '$pwd'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          
         
                session_start();
                $_SESSION["email"]=$row["email"];
                $_SESSION["pwd"]=$row["password"];
                $_SESSION["username"]=$row["username"];
                $_SESSION["role"]=$row["role"];
                $_SESSION["user_id"]=$row["id"];
                
                if($row["role"] == "admin"){
                    header ('Location:admin.php');
                }else{
                    header ('Location:index.php');
                }
        }
    } 
  }


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>My Marketplace</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <style>            
            
        </style>
    </head>

    <body style="height:1500px">

        <nav class="navbar navbar-expand-sm bg-custom navbar-dark">
            <a class="navbar-brand" href="index.php">
                <img src="bird.jpg" alt="My Marketplace">
            </a>            
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq.php">FAQ</a>
                </li>
            </ul>            
            <ul class="navbar-nav">
                      <li class='nav-item'>
                                <a class='nav-link' href='login.php'>Log In</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='signup.php'>Sign Up</a>
                            </li>
            </ul>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-3">
                    <h2>Login</h2>

                    <form action="login.php" method="post">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="email" class="form-control" name="email"  placeholder="email">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="pwd" id="" class="form-control"  placeholder="password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                </div>
                <div class="col-md-6">

                </div>

            </div>
        </div>

    </body>

</html>