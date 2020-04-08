<?php 
require_once('check_admin.php');

if (isset($_POST['save'])) {
	$category_id = mysql_real_escape_string($_POST['category_id']);
	$title = mysql_real_escape_string($_POST['title']);
	$unit_price = mysql_real_escape_string($_POST['unit_price']);
	$summary = mysql_real_escape_string($_POST['summary']);

	// image
	$imageName = $_FILES['image']['name'];
	$array = explode('.', $imageName);
	$extension = end($array);

	if (! in_array(strtolower($extension), ['jpg', 'png'])) {
		echo 'Sorry! You must upload an image';
		exit();
	}

	$image = time() . '.' . $extension;

	move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/products/'.$image);

	require_once('../config/connection.php');
	$sql= "INSERT INTO products(category_id, title, unit_price, summary, image) VALUES('$category_id', '$title', '$unit_price', '$summary', '$image')";

	$result = mysqli_query($con, $sql) or die('Sorry! Something went wrong. Please try again later.');
	$_SESSION['successful_product'] = true;
	header('Location: add_new_product.php');
}
 ?>