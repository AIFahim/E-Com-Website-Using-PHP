<?php 
require_once('check_admin.php');

if (isset($_POST['update'])) 
{
	$name = mysql_real_escape_string($_POST['name']);
	$category_id = mysql_real_escape_string($_POST['category_id']);
	require_once('../config/connection.php');
	$sql = " UPDATE categories SET name = '$name' WHERE id =  '$category_id' ";

	mysqli_query($con, $sql) or die('Sorry! update information failed.');
	header('location: categories.php');
	exit();
}

 ?>