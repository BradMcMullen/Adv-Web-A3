<!--logout.php
Brad McMullen
PHP for logging user out of the contacts page-->
<?php
session_destroy();
session_start();
$_SESSION['message'] = "you have been logged out";
$_SESSION['username'] = '';
$_SESSION['password'] = '';

header('location:login.php');
die;