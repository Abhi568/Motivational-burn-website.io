<?php
session_start();
session_unset();
unset($_SESSION['uid']);
// echo "okk";
unset($_SESSION['name']);
unset($_SESSION['image']);
session_destroy();
header('location:Login_page.php');

?>
