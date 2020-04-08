<?php 
require_once('check_admin.php');

$id = mysql_real_escape_string($_GET['id']);
$image = mysql_real_escape_string($_GET['image']);

require_once('../config/connection.php');

unlink('../uploads/banners/'.$image);

$sql = "DELETE FROM banners WHERE id = $id";
mysqli_query($con, $sql);

header('Location: banners.php');
exit();
 ?>