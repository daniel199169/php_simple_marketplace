<?php
 include "../include/config.php";

 $product_name = $_POST["product_name"];
 $sel_category = $_POST["sel_category"];
 $product_price = $_POST["product_price"];
// file name
$filename = $_FILES['file']['name'];

// Location
$location = '../upload/'.$filename;

// file extension
$file_extension = pathinfo($location, PATHINFO_EXTENSION);
$file_extension = strtolower($file_extension);

// Valid image extensions
$image_ext = array("jpg","png","jpeg","gif");

$response = 0;
if(in_array($file_extension,$image_ext)){
  // Upload file
  if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
    $response = $location;
  }
}

$sql = "INSERT INTO product (product_name, product_type, cost_price, image_url) VALUES ('$product_name', '$sel_category', '$product_price', '$filename')";
mysqli_query($conn, $sql);

echo "ok";

?>