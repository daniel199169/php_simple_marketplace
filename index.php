<?php
     session_start();
     include "include/config.php";
     include_once 'include/global.php';
     if (!check_loggedin()) {
         header ('Location:login.php');
     }

        
     $products = array();
     $query = "SELECT * FROM product ";
     $result = mysqli_query($conn, $query);
     if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
                $temp = array();
                array_push($temp, $row["product_name"]);
                array_push($temp, $row["product_type"]);
                array_push($temp, $row["cost_price"]);
                array_push($temp, $row["image_url"]);
                array_push($temp, $row["product_id"]);
                array_push($products, $temp);
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
</head>
<body style="height:1500px">
    <?php
         include "include/header.php";
    ?>
    <div class="container">
       <div class="row">
       <?php 
            for($i=0; $i<count($products); $i++){
                echo "<div class='col-md-4'>";
                echo "<div><h3>".$products[$i][0]."</h3>
                      <img src='../upload/".$products[$i][3]."' style='width:200px;' />
                      <h4>".$products[$i][2]." $</h4>
                      <button class='btn btn-success addbasket' id='".$products[$i][4]."' >Add to basket</button>
                      </div>";
                echo "</div>";
            }
        ?>
       </div>
    </div>
    <script>
    $(document).ready(function(){
            
            $('.addbasket').click(function(){
                var user_id = <?php echo $_SESSION["user_id"]; ?>;
                var amount = 1;
                $.ajax({
                    url: 'add_basket.php',
                    type: 'post',
                    datatype: "json",
                    data: { product_id: $(this).attr("id"),
                            user_id: user_id ,
                            amount: amount 
                          },
                    success: function(response){
                        
                    }
                });

            })
        });
       
    
    </script>



</body>
</html>