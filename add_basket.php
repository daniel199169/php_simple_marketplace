<?php
     include "include/config.php";
     $product_id = $_POST["product_id"];
     $user_id = $_POST["user_id"];
     $amount = $_POST["amount"];

     $query = "SELECT * FROM product WHERE product_id = '$product_id'";
     $result = mysqli_query($conn, $query);
     if (mysqli_num_rows($result) > 0) {
         // output data of each row
         while($row = mysqli_fetch_assoc($result)) {
            $product_name = $row["product_name"];
            $price = $row["cost_price"];
            $image_url = $row["image_url"];
         }
     } 

     $query_chk = "SELECT * FROM basket WHERE user_id = '$user_id' AND product_id = '$product_id'";
     $result_chk = mysqli_query($conn, $query_chk);

     if (mysqli_num_rows($result_chk) > 0) {
        
        $sql = "UPDATE basket SET amount = amount + $amount WHERE user_id = '$user_id' AND product_id = '$product_id'"; 
     }else{
        $sql = "INSERT INTO basket (user_id, product_id, image_url, product_name, price, amount) VALUES ('$user_id', '$product_id', '$image_url', '$product_name', '$price', $amount)";
     }   

     
     mysqli_query($conn, $sql);
     echo json_encode("ok");




?>