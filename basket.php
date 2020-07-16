<?php
    session_start();
    include "include/config.php";
    include_once 'include/global.php';
    if (!check_loggedin()) {
        header ('Location:login.php');
    }

    $products = array();
    $query = "SELECT * FROM basket WHERE user_id = '".$_SESSION['user_id']."'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
             $temp = array();
             array_push($temp, $row["image_url"]);
             array_push($temp, $row["product_name"]);
             array_push($temp, $row["price"]);
             array_push($temp, $row["amount"]);
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
  <link rel="stylesheet" href="../assets/css/style.css">
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
            <div class="col-md-12 p-3">
                <h2>Basket Status</h2>
                   
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>ProductImage</th>
                        <th>ProductName</th>
                        <th>Price</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 

                        $no = 1;
                        $all_price = 0;
                        for($i=0; $i<count($products); $i++){
                            echo "<tr><td>".$no."</td>";
                            echo "<td><img src='../upload/".$products[$i][0]."' style='width:30px;'</td>";
                            echo "<td>".$products[$i][1]."</td>";
                            echo "<td>".$products[$i][2]." $</td>";
                            echo "<td>".$products[$i][3]."</td>";
                            echo "</tr>";
                            $every_price = $products[$i][2]*$products[$i][3];
                            $all_price += $every_price;
                            $no++;
                        }
                        echo "<tr><td colspan='2' style='text-align:center;'>Sum</td>
                                  <td></td>
                                  <td colspan='2' style='text-align:center;'>".round($all_price, 2)." $</td></tr>";
                    ?>
                   
                    </tbody>
                </table>

            </div>
        </div>
        <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Product Add</h4>
          
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
      </div>
    </div>
  </div>
    </div>

   

</body>
</html>