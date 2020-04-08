<?php  
require_once('check_admin.php');

require_once('../config/connection.php');

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
              <div class="panel-heading">Add New Product</div>

              <div class="panel-body">
                <?php require_once('session_notifications.php');  ?>
                <form action="save_product.php" method="POST" class="form-horizontal" enctype="multipart/form-data">

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
                      <input type="text" name="title" placeholder="Enter Product Title" required="required" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4">Unit Price:</label>
                    <div class="col-sm-8">
                      <input type="number" name="unit_price" placeholder="e.g. 1000" class="form-control" required="required">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4">Summary:</label>
                    <div class="col-sm-8">
                      <textarea name="summary" class="form-control" rows="4" required="required"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4">Image:</label>
                    <div class="col-sm-8">
                      <img src="" class="img-responsive img-thumbnail pch-img" id="cntimage">
                      <input type="file" name="image" required="required" onchange="readURL(this);">
                    </div>
                  </div>

                -->

                  <hr>

                  <button type="submit" class="btn btn-success pull-right" name="save">Save</button>

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