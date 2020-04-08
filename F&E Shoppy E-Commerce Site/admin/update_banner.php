<?php 
require_once('check_admin.php');

if (isset($_POST['update'])) {
	$banner_id = mysql_real_escape_string($_POST['banner_id']);
	$caption = mysql_real_escape_string($_POST['caption']);

	if ($_FILES['image']['name']=='') {
		$image=$_POST['image_name'];
	}
	else{
		unlink('../uploads/banners/' . $_POST['image_name']);
		$imageName = $_FILES['image']['name']; // actual image name
		$array = explode('.', $imageName);
		$extension = end($array); // actual image extension

		if(! in_array(strtolower($extension), ['jpg', 'png']))
		{
			echo 'Sorry! You must upload an image';
			exit();
		}

		$image = time() . '.' . $extension;

		move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/banners/'.$image);
	}
	require_once('../config/connection.php');
	$sql = " UPDATE banners SET caption = '$caption', image = '$image' WHERE id =  '$banner_id' ";

	mysqli_query($con, $sql) or die('Sorry! update information failed.');
	header('location: banners.php');
	exit();
}

 ?>