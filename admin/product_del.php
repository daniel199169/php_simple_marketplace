<?php
     include "../include/config.php";
     
     $id = $_POST["id"];

     $query = "DELETE FROM product WHERE product_id= $id";
     mysqli_query($conn, $query);

     echo json_encode("ok");

?>