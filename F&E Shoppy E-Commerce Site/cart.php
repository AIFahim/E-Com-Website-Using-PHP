<?php
session_start();
require_once('config/connection.php');

if(isset($_POST['save_to_cart']))
{
	$product_id = mysqli_real_escape_string($con, $_POST['product_id']);
	$quantity = mysqli_real_escape_string($con, $_POST['quantity']);

	$sql = "SELECT * FROM products WHERE id = '$product_id' LIMIT 1";
	$result = mysqli_query($con, $sql) or die("Sorry! Something Went Wrong.");
	$product = mysqli_fetch_assoc($result);

	$_SESSION['products'][] = $product + ['quantity' => $quantity];
}
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
		<div class="row" style="margin-top: 25px;">
					
			<div class="col-md-8">
				
				<div class="panel panel-info">
					<div class="panel-heading">
						<i class="fa fa-shopping-cart"></i> Cart Summary
					</div>

					<div class="panel-body">
						<?php include_once('admin/session_notifications.php'); ?>				

						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th width="15%">Image</th>
									<th>Title</th>
									<th>Unit Price</th>
									<th>Quantity</th>
									<th>Sub-Total</th>
								</tr>
							</thead>

							<tbody>
                            <!--

							<?php
								if( isset($_SESSION['products']) && count($_SESSION['products']) > 0 )
								{
									$total = 0;

									foreach ($_SESSION['products'] as $product) 
									{
										?>

											<tr>
												<td>
													<img src="uploads/products/<?php echo $product['image'];?>" class="img-responsive img-thumbnail">
												</td>
												<td>
													<?php echo $product['title'];?>
												</td>
												<td>
													<?php echo $product['unit_price'];?>
												</td>
												<td>
													<?php echo $product['quantity'];?>
												</td>
												<td>
													<?php echo $sub_total = $product['unit_price'] * $product['quantity']; ?>
												</td>
											</tr>										

										<?php

										$total = $total + $sub_total;
									}

									?>
									<tr>
										<td colspan="5" class="text-center">
											<h4>Total: $ <?php echo $total; ?></h4>
										</td>
									</tr>
									<?php
								}
							?>
						-->
																	
							</tbody>
						</table>
					</div>
					<div class="panel-footer text-right">
						<a href="empty_cart.php" class="text-danger">Empty Cart</a> | 
						<a href="index.php" class="text-primary">Continue Shopping</a>
					</div>
				</div>


			</div>

			<div class="col-md-4">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<i class="fa fa-money"></i> Payment Details
					</div>

					<div class="panel-body">
						<form action="confirm_order.php" method="POST" class="form-horizontal">
							
							<label>Payment Type:</label>
							<select name="payment_type" class="form-control">
								<option value="COD">Cash On Delivery</option>
							</select>

							<hr>

							<p class="text-center">

								<?php
							        if(isset($_SESSION['customer_login']) && $_SESSION['customer_login'] == true)
							        {
							          ?>
							            <button type="submit" name="confirm_order" class="btn btn-success">
											Confirm Order
										</button>
							          <?php
							        }
							        else 
							        {
							          ?>
							            
						            	<a href="#" data-toggle="modal" data-target="#login-modal">
						            		<button class="btn btn-success">
						            			Confirm Order
						            		</button>
						            		
						            	</a>
											
										
							          <?php
							        }
							        ?>

								<!-- <button type="submit" name="confirm_order" class="btn btn-success">
									Confirm Order
								</button> -->
							</p>

						</form>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<?php include_once('partials/footer.php'); ?>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>