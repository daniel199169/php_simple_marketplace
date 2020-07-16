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
        
                <div class="container py-3">
                    <div class="row">
                        <div class="col-10 mx-auto">
                            <div class="accordion" id="faqExample">
                                <div class="card">
                                    <div class="card-header p-2" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Q: How does this work?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                                        <div class="card-body">
                                            <b>Answer:</b> It works using the Bootstrap 4 collapse component with cards to make a vertical accordion that expands and collapses as questions are toggled.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-2" id="headingTwo">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: What is Bootstrap 4?
                                        </button>
                                    </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                                        <div class="card-body">
                                            Bootstrap is the most popular CSS framework in the world. The latest version released in 2018 is Bootstrap 4. Bootstrap can be used to quickly build responsive websites.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-2" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Q. What is another question?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                                        <div class="card-body">
                                            The answer to the question can go here.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-2" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Q. What is the next question?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                                        <div class="card-body">
                                            The answer to this question can go here. This FAQ example can contain all the Q/A that is needed.
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--/row-->
                </div>
<!--container-->
                </div>
              
        </div>

    </body>

</html>