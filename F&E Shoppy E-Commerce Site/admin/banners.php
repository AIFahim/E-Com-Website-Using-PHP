<?php  
require_once('check_admin.php');
require_once('../config/connection.php');

$sql = "SELECT * FROM banners ORDER BY id DESC";

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
          <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">View All Banners</div>

              <div class="panel-body">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th width="20%">Image</th>
                      <th>Image Name</th>                 
                      <th>Caption</th>                      
                      <th colspan="2">Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                      if(mysqli_num_rows($result) > 0)
                      {
                        while($row = mysqli_fetch_assoc($result))
                        {
                          ?>
                            <tr>
                              <td>
                                <img src="../uploads/banners/<?php echo $row['image'];?>" class="img-responsive">
                              </td>
                              <td><?php echo $row['image'];?></td>          
                              <td><?php echo $row['caption'];?></td>                              
                              <td>
                                <a class="btn btn-sm btn-primary" href="banner_edit.php?id=<?php echo $row['id'];?>">Edit</a>
                              </td>
                              <td>
                                <a class="btn btn-sm btn-danger" href="banner_delete.php?id=<?php echo $row['id'];?>&image=<?php echo $row['image'];?>">Delete</a>
                              </td>
                            </tr>

                          <?php
                        }
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>

  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>  
</body>
</html>