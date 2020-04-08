<?php  
session_start();

if(isset($_POST['login'])) {
	$email =mysql_real_escape_string($_POST['email']);
	$password = md5(mysql_real_escape_string($_POST['password']));

	require_once('../config/connection.php');
	$sql = "SELECT * FROM users WHERE email ='$email' AND password='$password' AND user_type='A' AND status = 1 LIMIT 1";
	$result=mysqli_query($con, $sql);

	if (mysqli_num_rows($result)>0) {
		$_SESSION['admin_login'] = true;
		header('Location: dashboard.php');
		exit();
	}
	else{
		header('Location: index.php');
		exit();
	}
}
?>