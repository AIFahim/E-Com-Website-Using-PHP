<?php
session_start();
require_once('config/connection.php');

$product_id = mysqli_real_escape_string($con, $_GET['product_id']);

$sql = "SELECT * FROM products WHERE id = '$product_id' LIMIT 1";
$result = mysqli_query($con, $sql) or die("Sorry! Something went wrong.");
$product = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
	<head>
	<title>Welcome to Mir Shop</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fonts/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

	<body>
		
		<?php include_once('partials/menu.php'); ?>

		<div class="container">

			<div class="row" style="margin-top: 20px;">
					
				<div class="col-md-6">
					
					<div class=" pr_pic">
						<img src="uploads/products/<?php echo $product['image'];?>" alt="" class="img-thumbnail img-responsive">
					</div>
				</div>

				<div class="col-md-6">
					<h3 style="margin-top: 25px !important;; margin-bottom: 20px !important;">
						Product Title: <?php echo $product['title']; ?>
					</h3>

					<samp style="font-weight: bold;">
						Unit Price: $<?php echo $product['unit_price']; ?> 
					</samp>

					<p style="margin-top: 15px;">
						Summary: <?php echo $product['summary']; ?>
					</p>

					<form action="cart.php" class="form-inline" method="POST">

						<input type="hidden" name="product_id" value="<?php echo $product['id'];?>">

						<input type="number" name="quantity" id="quantity" value="1" class="form-control" min="1">
						<button type="submit" class="btn btn-warning" name="save_to_cart">
							<i class="fa fa-shopping-cart"></i> add to cart
						</button>
					</form>
				</div>
				
			</div>

		</div>

		<?php include_once('partials/footer.php'); ?>

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>