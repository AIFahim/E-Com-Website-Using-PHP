<?php  
require_once('check_admin.php');

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
              <div class="panel-heading">Add New Category</div>

              <div class="panel-body">
                <?php require_once('session_notifications.php');  ?>
                <form action="save_category.php" method="POST" class="form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-4">Category Name:</label>
                    <div class="col-sm-8">
                      <input type="text" name="name" class="form-control" placeholder="Enter Category Name" required="required">
                    </div>
                  </div>
                  <hr>

                  <button type="submit" class="btn btn-success pull-right" name="save">Save</button>

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