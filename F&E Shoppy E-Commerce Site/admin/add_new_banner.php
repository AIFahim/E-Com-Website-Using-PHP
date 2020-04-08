<?php  
require_once('check_admin.php');

require_once('../config/connection.php');
$sql = "SELECT * FROM banners ORDER BY id ASC";
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
              <div class="panel-heading">Add New Banner</div>

              <div class="panel-body">
                <?php require_once('session_notifications.php');  ?>
                <form action="save_banner.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="col-sm-4">Caption:</label>
                    <div class="col-sm-8">
                      <textarea name="caption" class="form-control" rows="4" required="required"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4">Image:</label>
                    <div class="col-sm-8">
                      <input name="image" required="required" type="file">
                    </div>
                  </div>

                  <hr>

                  <button type="submit" class="btn btn-success pull-right" name="add">Add Banner</button>

                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>  
</body>
</html>