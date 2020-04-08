<?php 
require_once('check_admin.php');

if (isset($_POST['save'])) {
	$name = mysql_real_escape_string($_POST['name']);

	require_once('../config/connection.php');

	$sql = "INSERT INTO categories(name) VALUES('$name')";
	$result = mysqli_query($con, $sql) or die('Sorry! Something went wrong. Please try again later.');
	$_SESSION['successful_category'] = true;
	header('Location: add_new_category.php');
	exit();
}
 ?>