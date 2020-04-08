<?php 
require_once('check_admin.php');

$category_id = mysql_real_escape_string($_GET['id']);
require_once('../config/connection.php');
$sql = "DELETE FROM categories WHERE id=$category_id";
mysqli_query($con, $sql);

$sql = "DELETE FROM products WHERE category_id=$category_id";
mysqli_query($con, $sql);


header('Location: categories.php');
exit();

 ?>