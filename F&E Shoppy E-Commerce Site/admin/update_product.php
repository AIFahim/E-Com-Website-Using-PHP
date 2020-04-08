<?php 
require_once('check_admin.php');

if (isset($_POST['update'])) {
	$product_id = mysql_real_escape_string($_POST['product_id']);
	$title = mysql_real_escape_string($_POST['title']);
	$category_id = mysql_real_escape_string($_POST['category_id']);
	$unit_price = mysql_real_escape_string($_POST['unit_price']);
	$summary = mysql_real_escape_string($_POST['summary']);

	if ($_FILES['image']['name']=='') {
		$image=$_POST['image_name'];
	}
	else{
		unlink('../uploads/products/'.$_POST['image_name']);
		$imageName=$_FILES['image']['name'];
		$array=explode('.', $imageName);
		$extension=end($array);
		if(! in_array(strtolower($extension), ['jpg', 'png']))
		{
			echo 'Sorry! You must upload an image';
			exit();
		}

		$image= time().'.'.$extension;

		move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/products/'.$image);
	}
	require_once('../config/connection.php');
	$sql = " UPDATE products SET title = '$title', category_id = '$category_id', unit_price = '$unit_price', summary = '$summary', image = '$image' WHERE id =  '$product_id' ";

	mysqli_query($con, $sql) or die('Sorry! update information failed.');
	header('location: products.php');
	exit();
}
 ?>