<?php  
session_start();
if (!(isset($_SESSION['admin_login']) && $_SESSION['admin_login'] = true)) {
  header('Location: index.php');
}
?>