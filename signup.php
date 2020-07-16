<?php
     session_start();
     include "include/config.php";
     
     if(isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["pwd"])){
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $username = $_POST["username"];
       
        $sql = "INSERT INTO user (username, email, password, role) VALUES ('$username', '$email', '$pwd', 'user')";

        if (mysqli_query($conn, $sql)) {
            header ('Location:login.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Sign Up</a>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-3">
                    <h2>Sign Up</h2>

                    <form action="signup.php" method="post" id="myfrm" onsubmit="return false;">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="username">
                            </div> 
                           <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="email">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="pwd" id="pwd" class="form-control"  placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password</label>
                                <input type="password" name="confirm_pwd" id="confirm_pwd" class="form-control"  placeholder="Confirm Password">
                            </div>
                            <button type="submit" id="submit" class="btn btn-primary btn-block">Create</button>

                    </form>
                </div>
                <div class="col-md-6">

                </div>

            </div>
        </div>
        <script>
            $(document).ready(function(){
                $("#submit").click(function(){
                    if($("#pwd").val() == "" || $("#confirm_pwd").val() == "" || $("#email").val() == ""){
                        alert("please enter correct values");
                        return false;
                    }
                    if($("#pwd").val() != $("#confirm_pwd").val() ){
                        alert("wrong password");
                    }else{
                        $('#myfrm').removeAttr('onsubmit');
                        $('#myfrm').submit();
                        
                    }
                    
                })
                

            })

        </script>

    </body>

</html>