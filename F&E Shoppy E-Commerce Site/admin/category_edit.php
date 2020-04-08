<?php  
require_once('check_admin.php');

require_once('../config/connection.php');
$id = mysqli_real_escape_string($con, $_GET['id']);

$sql = "SELECT * FROM categories where id='$id' LIMIT 1";
$result = mysqli_query($con, $sql) or die("Something is wrong");
$category = mysqli_fetch_assoc($result);

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
              <div class="panel-heading">Update Category</div>

              <div class="panel-body">
                <form action="update_category.php" method="POST" class="form-horizontal">
                  <input type="hidden" name="category_id" value="<?php echo $id; ?>">
                  <div class="form-group">
                    <label class="col-sm-4">Category Name:</label>
                    <div class="col-sm-8">
                      <input type="text" name="name" class="form-control" placeholder="Enter Category Name" required="required" value="<?php echo $category['name'];?>">
                    </div>
                  </div>
                  <hr>

                  <button type="submit" class="btn btn-success pull-right" name="update">Update</button>

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