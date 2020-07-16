<?php
    session_start();
    // $_SESSION["email"]="";
    // $_SESSION["pwd"]="";
    // $_SESSION["username"]="";
    // $_SESSION["role"]="";
    // $_SESSION["user_id"]="";
    if (isset ($_SESSION['email'])) unset ($_SESSION['email']);
    if (isset ($_SESSION['username'])) unset ($_SESSION['username']);
    if (isset ($_SESSION['pwd'])) unset ($_SESSION['pwd']);
    if (isset ($_SESSION['role'])) unset ($_SESSION['role']);
  
    
    session_unset();
    session_destroy();
    
	header ('Location:login.php');
?>