<?php
session_start();

$con = mysqli_connect("localhost", "root", "YES") or die("Could not connect to host");

if(isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	require_once('config/connection.php');
	require_once('config/function.php');

	$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' AND user_type = 'U' AND status = 1 LIMIT 1";

	$result = mysqli_query($con, $sql);

	if(mysqli_num_rows($result) > 0) {
		
		$_SESSION['customer'] = mysqli_fetch_assoc($result); 
		$_SESSION['customer_login'] = true;
		header('Location: cart.php');
		exit();
		
	} else {
		header('Location: index.php');
		exit();
	}
}
 
?>