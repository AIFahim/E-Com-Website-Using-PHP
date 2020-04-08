<?php
session_start();

require_once('config/connection.php');
$search = mysqli_real_escape_string($con, $_GET['search']);

$sql = "SELECT * FROM products where title like '%{$search}%'";
$products=mysqli_query($con, $sql) or die("Unable to run query!");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to F & E Shop</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fonts/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<?php include_once('partials/menu.php');  ?>
	<div class="container">
		<div class="product_home_t">
			<h2>search <span>results</span> </h2>
		</div>
		<div>
			<?php
				if(mysqli_num_rows($products) > 0)
                    {
                        while($row = mysqli_fetch_assoc($products))
                        {
                          ?>			 
							<div class="col-md-3 each-item">
								<div class="item-stle">
									<div class=" pr_pic">
										<img src="uploads/products/<?php echo $row['image'];?>" alt="" class="img-thumbnail img-responsive">
									</div>
									<h4 class="text-center"><?php echo $row['title']; ?></h4>

									<samp class="price">
										Price: $<?php echo $row['unit_price']; ?>
									</samp>

									<p class="text-center">
										<a href="view_details.php?product_id=<?php echo $row['id']; ?>">
											<button type="button" class="btn btn-primary sty"><i class="fa fa-eye" aria-hidden="true"></i> view details</button>
										</a>
									</p>
								</div>
							</div>
							<?php
                        }
                    }
                    ?>
		</div>
	</div>
	<?php include_once('partials/footer.php'); ?>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>