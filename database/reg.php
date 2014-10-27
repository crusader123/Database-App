<?php
include("essential.php");
session_start();
$user = $_POST['username'];
$_SESSION['user']=$user;
$pwd = $_POST['password'];
$_SESSION['password']=$pwd;
dbconnect('admin','admin');
$query2="CREATE USER '$user'@'localhost' IDENTIFIED BY '$pwd'";
$rv = mysql_query( $query2 , $con);
if(!$rv)
{
	die(mysql_error());
}
$query2="GRANT select on USERS to $user@'localhost'";
$rv = mysql_query( $query2 , $con);
if(!$rv)
{
	die(mysql_error());
}
$q = sprintf("INSERT INTO USERS (username,password) VALUES ('%s','%s')",$user,$pwd);
$rv = mysql_query( $q , $con);
if(!$rv){
	header('Location:./register.php');
	die("hello");
}
mysql_close( $con );
header('Location:./admin.php');
die('hello');
?>
