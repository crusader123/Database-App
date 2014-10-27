<?php
include("essential.php");
$user = $_POST['username'];
$pwd = $_POST['password'];
//echo "dddd ".$name;
echo $user;
echo $pwd;
dbconnect($user,$pwd);
$q = sprintf("select * from USERS where username='%s' AND password='%s'",$user ,$pwd);
$rv = mysql_query( $q , $con);
if(!$rv){
	die("There is some internal error !");
}
else {
	$num_rows = mysql_num_rows($rv);

	if($num_rows == 1){
		$row = mysql_fetch_assoc($rv);
		session_start();
		$_SESSION['id'] = $row['id'];
		$_SESSION['user'] = $row['username'];
		$_SESSION['password'] = $row['password'];
	//	if($_SESSION['user']=="admin"){
		header("Location:admin.php");
	//	}
	//	else{
	//	echo "successful ".$_SESSION['user'];
	//	header("Location:user_op1.php");
//}

	}
	else{
		
		//header("Location:kapilindex.php");
		echo "not successful";
	}
	mysql_close( $con );
}
?>
