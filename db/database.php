<?php
$host = "localhost";
$username = "db200162912";
$password = "30840";
$db_name = "db200162912";
$tbl_name = "members";

//Connect to the server and select the database
mysql_connect("$host", "$username", "$password") or die ("cannot connect");
mysql_select_db("db200162912") or die ("cannot select DB");