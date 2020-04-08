<?php  
require_once('check_admin.php');

require_once('../config/connection.php');

$id = mysqli_real_escape_string($con, $_GET['id']);
$sql = "SELECT * FROM products where id = '$id' LIMIT 1";
$result = mysqli_query($con, $sql);
$product = mysqli_fetch_assoc($result);

$sql = "SELECT * FROM categories ORDER BY name ASC";

$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome to Mir Shop</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../fonts/fonts.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
</head>
<body>
  <?php include_once('../partials/admin-menu.php') ?>
  <div class="container">

        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
              <div class="panel-heading">Update Product</div>

              <div class="panel-body">
                <?php require_once('session_notifications.php');  ?>
                <form action="update_product.php" method="POST" class="form-horizontal" enctype="multipart/form-data">

                  <input type="hidden" name="product_id" value="<?php echo $id;?>">
                  <input type="hidden" name="image_name" value="<?php echo $product['image'];?>">

                  <div class="form-group">
                    <label class="col-sm-4">Category Name:</label>
                    <div class="col-sm-8">
                      <select name="category_id" class="form-control" required="required">
                        <?php
                          if(mysqli_num_rows($result) > 0)
                          {
                            while($row = mysqli_fetch_assoc($result))
                            {
                              ?>
                                <option value="<?php echo $row['id'] ?>">
                                  <?php echo $row['name']; ?>
                                </option>
                              <?php
                            }
                          }
                        ?>                        
                      </select>
                    </div>
                  </div>
                  <!--
                  <div class="form-group">
                    <label class="col-sm-4">Title:</label>
                    <div class="col-sm-8">
                      <input type="text" name="title" placeholder="Enter Product Title" required="required" class="form-control" value="<?php echo $product['title']; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4">Unit Price:</label>
                    <div class="col-sm-8">
                      <input type="number" name="unit_price" placeholder="e.g. 1000" class="form-control" required="required" value="<?php echo $product['unit_price']; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4">Summary:</label>
                    <div class="col-sm-8">
                      <textarea name="summary" class="form-control" rows="4" required="required"><?php echo $product['summary']; ?></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4">Image:</label>
                    <div class="col-sm-8">
                      <img src="../uploads/products/<?php echo $product['image'];?>" class="img-responsive img-thumbnail pch-img" id="cntimage">
                      <input type="file" name="image" onchange="readURL(this);">
                    </div>
                  </div>
                   -->
                  <hr>

                  <button type="submit" class="btn btn-success pull-right" name="update">Update</button>

                </form>
              </div>
            </div>
          </div>
        </div>
      

    </div>
    <script type="text/javascript">
      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#cntimage')
                    .attr('src', e.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
      }
    </script>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script> 
</body>
</html>