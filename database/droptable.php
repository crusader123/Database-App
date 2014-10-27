<?php 
include "header.php";
include "essential.php";
session_start();
check_login();
$table=$_POST['drop_table'];
dbconnect($_SESSION['user'],$_SESSION['password']);
?>
<form action="admin.php" method="POST">
<input type="submit" name="back" value="Back"/>
<br><br>
</form>
<?php
$result = mysql_query("DROP table $table",$con);
	if(!$result)
	{
		echo "Error:".mysql_error();
	}
	else
	{
		echo "<h2>Table $table Drop Successfully</h2>";
	}
mysql_close();
include "footer.php";
?>
