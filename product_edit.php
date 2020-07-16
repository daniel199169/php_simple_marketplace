<?php
    session_start();
    include "include/config.php";
    include_once 'include/global.php';
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
                <h2>Products Table</h2>
                   <button class="btn btn-primary" 
                     style="position: relative;float: right;margin-bottom: 20px;" 
                     id="add" data-toggle="modal" data-target="#myModal">Add Product</button>
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>ProductImage</th>
                        <th>ProductName</th>
                        <th>ProductType</th>
                        <th>Price</th>
                        <th>Management</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 

                        $no = 1;
                        for($i=0; $i<count($products); $i++){
                            echo "<tr><td>".$no."</td>";
                            echo "<td><img src='../upload/".$products[$i][3]."' style='width:30px;'</td>";
                            echo "<td>".$products[$i][0]."</td>";
                            echo "<td>".$products[$i][1]."</td>";
                            echo "<td>".$products[$i][2]."</td>";
                            echo "<td id='".$products[$i][4]."' style='cursor: pointer;' class='del'>delete</td>";
                            echo "</tr>";
                            $no++;
                        }
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
        
        <!-- Modal body -->
        <div class="modal-body">
            <form id="product_frm">
                <div id='preview'>
                  <img id="prevImage" style = "width: 100px;" />
                </div>
                <div class="form-group">
                    <label for="">Select file :</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" >
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Product Name :</label>
                    <input type="text" class="form-control" name="product_name" id="product_name"  placeholder="Product Name">
                </div>
                <div class="form-group">
                    <label for="">Product Category :</label>
                    <select name="sel_category" id="sel_category" class="form-control">
                       <option value="Food" class="form-control">Food</option>
                       <option value="Drink" class="form-control">Drink</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Product Price :</label>
                    <input type="text" class="form-control" name="product_price" id="product_price" placeholder="Product Price">
                </div>
                <button class="btn btn-primary btn-block" id="btn_upload">Add Product</button>
                
            </form>
        </div>
        
      </div>
    </div>
  </div>
    </div>

    <script>
        $(document).ready(function(){
            var fileName = "";
            $("#customFile").change(function(event){
                let input = event.target;

                if (input.files && input.files[0]) {
                    let reader = new FileReader();
                    this.media = input.files[0];
                    reader.onload = e => {
                        $("#prevImage").attr("src", e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
                fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            })

            $('#btn_upload').click(function(){

                var fd = new FormData();
                var files = $('#customFile')[0].files[0];
                var product_name = $("#product_name").val();
                var sel_category = $("#sel_category").val();
                var product_price = $("#product_price").val();

                fd.append('file',files);
                fd.append('product_name',product_name);
                fd.append('sel_category',sel_category);
                fd.append('product_price',product_price);

                // AJAX request
                $.ajax({
                    url: 'admin/ajaxfile.php',
                    type: 'post',
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: function(response){
                        
                    }
                });

            });

            $('.del').click(function(){
                $.ajax({
                    url: 'admin/product_del.php',
                    type: 'post',
                    datatype: "json",
                    data: {id: $(this).attr("id")},
                    success: function(response){
                        
                    }
                });

            })
        });
       

    </script>

</body>
</html>