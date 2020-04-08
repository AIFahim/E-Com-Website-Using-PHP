<?php  
require_once('check_admin.php');

require_once('../config/connection.php');
$id = mysqli_real_escape_string($con, $_GET['id']);

$sql = "SELECT * FROM banners where id='$id' LIMIT 1";
$result = mysqli_query($con, $sql) or die("Something is wrong");
$banner = mysqli_fetch_assoc($result);

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
              <div class="panel-heading">Update Banner</div>

              <div class="panel-body">
                <form action="update_banner.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                  <input type="hidden" name="banner_id" value="<?php echo $id; ?>">
                  <input type="hidden" name="image_name" value="<?php echo $banner['image']; ?>">
                  <div class="form-group">
                    <label class="col-sm-4">Caption:</label>
                    <div class="col-sm-8">
                      <textarea name="caption" class="form-control" rows="4" required="required"><?php echo $banner['caption']; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4">Image:</label>
                    <div class="col-sm-8">
                      <img src="../uploads/banners/<?php echo $banner['image'];?>" class="img-responsive img-thumbnail" id="cntimage">
                      <input type="file" name="image" onchange="readURL(this);">
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