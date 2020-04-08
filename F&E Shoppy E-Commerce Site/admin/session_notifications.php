<?php
if( isset($_SESSION['successful']) && $_SESSION['successful'] == true )
{
	
	?>

		<div class="alert alert-success">
			<p>
				Congratulation! Banner added successfully.
			</p>
		</div>

	<?php

	$_SESSION['successful'] = false;
}
?>

<?php
if( isset($_SESSION['successful_category']) && $_SESSION['successful_category'] == true )
{
	
	?>

		<div class="alert alert-success">
			<p>
				Congratulation! Category added successfully.
			</p>
		</div>

	<?php

	$_SESSION['successful_category'] = false;
}
?>

<?php
if( isset($_SESSION['successful_product']) && $_SESSION['successful_product'] == true )
{
	
	?>

		<div class="alert alert-success">
			<p>
				Congratulation! Product added successfully.
			</p>
		</div>

	<?php

	$_SESSION['successful_product'] = false;
}
?>

<?php
if( isset($_SESSION['order_placed']) && $_SESSION['order_placed'] == true )
{
	
	?>

		<div class="alert alert-success">
			<p>
				Congratulation! Your order has been placed successfully.
			</p>
		</div>

	<?php


	$_SESSION['order_placed'] = false;
}

?>