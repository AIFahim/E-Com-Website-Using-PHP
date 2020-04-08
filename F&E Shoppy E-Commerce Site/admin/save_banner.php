<?php  
require_once('check_admin.php');

if (isset($_POST['add'])) {
	$caption = mysql_real_escape_string($_POST['caption']);


	//image validation
	$imageName = $_FILES['image']['name'];
	$array = explode('.', $imageName);
	$extention = end($array); // image extention

	if (! in_array(strtolower($extention), ['jpg', 'png'])) {
		echo "Sorry! You must upload an image";
		exit();
	}

	$image = time() . '.' . $extention;

	move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/banners/'.$image);
	require_once('../config/connection.php');
	$sql = "INSERT INTO banners(caption, image) VALUES ('$caption', '$image')";

	$result = mysqli_query($con, $sql) or die('Sorry! Something went wrong. Please try again later.');
	$_SESSION['successful'] = true;
	header('Location: add_new_banner.php');
	exit();

}

?>