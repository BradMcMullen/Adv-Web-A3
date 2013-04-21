<?php
session_start();
include('db/database.php');

//Get the username and password from the login form
//Prevent SQL injections
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$username = stripslashes($username);
$password = stripslashes($password);

	
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);
$sql = "SELECT * FROM $tbl_name WHERE username = '$username'
and password = '$password'";
$result = mysql_query($sql);

//Count the table row. 0 = No user exists
$count = mysql_num_rows($result);

//If $result is 1 the user exists
if($count == 1) {
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	header('location:contacts.php');
	die;
}

/*  //If the result match the $username && $password, table row will be 1
if($count == 1) {
    session_register('username');
    session_register('password');
    header('location:login_success.php');
}*/

//If it does not match, give a return message
else {
    echo 'Wrong Username or Password';
	?> <a href="http://webdesign4.georgianc.on.ca/~200162912/mobile/login.php">Click Here to return.</a><?php
}
?>