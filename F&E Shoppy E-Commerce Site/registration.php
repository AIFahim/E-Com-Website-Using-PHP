<?php
session_start();

if(isset($_POST['register'])) {
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$mobile_no = $_POST['mobile_no'];
	$address = $_POST['address'];

	require_once('config/connection.php');

	$sql = "INSERT INTO users(first_name, last_name, email, password, mobile_no, address) VALUES('$first_name', '$last_name', '$email', '$password', '$mobile_no', '$address')";

	mysqli_query($con, $sql);
	header('Location: index.php');
	exit();
}
?>