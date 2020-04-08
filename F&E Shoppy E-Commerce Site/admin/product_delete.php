<?php 
require_once('check_admin.php');

$id = mysql_real_escape_string($_GET['id']);
$image = mysql_real_escape_string($_GET['image']);

require_once('../config/connection.php');

unlink('../uploads/products/'.$image);

$sql = "DELETE FROM products WHERE id = $id";
mysqli_query($con, $sql);

header('Location: products.php');
exit();
 ?>