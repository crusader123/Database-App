<?php include "essential.php";
session_start();
check_login();
echo "<a href='logout.php'>Logout</a></br>";
 dbconnect($_SESSION['user'],$_SESSION['password']);
$table=$_SESSION['tab_name'];
$USER1= $_SESSION["uname"];
	$qu="REVOKE INSERT,update,delete,select ON $table FROM $USER1@'localhost'";
	$rv = mysql_query( $qu , $con);
	if( $_POST["change"]){
	$change_items = join(', ', $_POST["change"]);
	$query = "GRANT $change_items ON $table TO $USER1@'localhost'";
	$rv = mysql_query( $query , $con);
	}
header("location:show_privilege.php");
?>
