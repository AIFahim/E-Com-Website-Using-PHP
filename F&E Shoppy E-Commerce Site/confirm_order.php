<?php
session_start();
unset($_SESSION['products']);
$_SESSION['order_placed'] = true;

header('Location: cart.php');
exit();
?>