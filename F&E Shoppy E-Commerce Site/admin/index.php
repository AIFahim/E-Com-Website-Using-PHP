<?php  
require_once('../config/connection.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome to F & E Shop</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../fonts/fonts.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css">
</head>
<body class="bg-dark">
  <div class="container">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 bk_ig">
          <div class="panel clr-chg">
            <div class="panel-heading adm-hd">Admin | Login</div>

            <div class="panel-body">
              <form action="login.php" method="POST" class="form-horizontal">

                <div class="form-group">
                  <label class="col-sm-3 mrg-d">Email:</label>
                  <div class="col-sm-9">
                    <input name="email" class="form-control" placeholder="Enter Your Email" required="required" type="email">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 mrg-d">Password:</label>
                  <div class="col-sm-9">
                    <input name="password" class="form-control" placeholder="Enter Your Password" required="required" type="password">
                  </div>
                </div>

                <button type="submit" class="btn btn-success pull-right" name="login">Login</button>

              </form>
            </div>
          </div>
        </div>

      </div>

    </div>
</body>
