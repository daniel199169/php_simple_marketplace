<?php
  session_start();
  include "include/config.php";
  include_once 'include/global.php';
 

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
        <?php 
         
             if (check_loggedin()) {
                 include "include/header.php";
             }else{ 
                    echo '<nav class="navbar navbar-expand-sm bg-custom navbar-dark">
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
                                <li class="nav-item">
                                            <a class="nav-link" href="login.php">Log In</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="signup.php">Sign Up</a>
                                        </li>
                        </ul>
                    </nav>';
              }
    ?>
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6 p-3">
                    <h2>Contact us</h2>

                    <form action="contact.php" method="post">
                            <div class="form-group">
                                <label for="">Name :</label>
                                <input type="text" class="form-control" name="name"  placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <label for="">Email Address :</label>
                                <input type="email" class="form-control" name="email"  placeholder="email" required>
                            </div>
                            <div class="form-group">
                                <label for="">Message :</label>
                                <textarea name="comment" cols="50" rows="5" id="comment" class="form-control" placeholder="Please write your comment" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Send</button>
                    </form>
                </div>
                <div class="col-md-3">

                </div>

            </div>
        </div>

    </body>

</html>