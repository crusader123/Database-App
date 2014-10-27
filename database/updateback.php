<?php include "essential.php";
check_login();
session_start();
echo "<a href='logout.php'>Logout</a></br>";
$table=$_SESSION['tab_name'];
 dbconnect($_SESSION['user'],$_SESSION['password']);
$result2 = mysql_query("SHOW FIELDS FROM $table",$con);
$num = mysql_numrows($result2);
$ctr=0;
$j="pri";
$pri='kapil';
$query='';
$change=0;
	$priatt=$_POST['pri'];
	$primary=$_POST['prim'];
while($ctr<$num){
	$ct="'".$ctr;
	$ct=$ct."'";
	$s="attr".$ctr;
	$s1="attr".$ct;
	$attr=$_POST["attr".$ctr];
	
	$val=$_POST["val".$ctr];
	$query="UPDATE $table SET $attr='$val' where $priatt='$primary'";
	$rv=mysql_query($query,$con);
	if($attr==$priatt and $primary!=$val){
	$primary=$val;
}
	if(!$rv){
	die('Error: ' . mysql_error());

	}
$ctr++;
}
header("Location:dbupdate.php");

mysql_close();
?>
