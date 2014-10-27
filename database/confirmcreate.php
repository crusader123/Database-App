<?php include "essential.php";
session_start();
check_login();
echo "<a href='logout.php'>Logout</a></br>";
$table=$_SESSION['new_table'];
dbconnect($_SESSION['user'],$_SESSION['password']);
$num_attr=$_SESSION['num_attr'];
$pri=$_POST['primary'];
?>
<form action="admin.php" method="POST">
<input type="submit" name="back" value="Back"/>
</form>
<?php
$j=0;
	$type=$_POST['type'.$j];
	$attr=$_POST['attr'.$j];
	if($type=='char')
	{
		$result = mysql_query("create table $table($attr char(35))",$con);
	}
	else
	{
		$result = mysql_query("create table $table($attr $type)",$con);
	}
	if(!$result)
	{
		die('Error: ' . mysql_error());
	}
	echo "$type $attr";
	$j++;
while ($j<$num_attr) 
{
	$type=$_POST['type'.$j];
	$attr=$_POST['attr'.$j];
	if($type=='char')
	{
		$result = mysql_query("Alter table $table add $attr char(35)",$con);
	}
	else
	{
		$result = mysql_query("Alter table $table add $attr int",$con);
	}
	if(!$result)
	{
		die('Error: ' . mysql_error());
	}
	$j++;
}
	$attr=$_POST['attr'.$pri];
		$result = mysql_query("Alter table $table add primary key($attr)",$con);
	if(!$result)
	{
		die('Error: ' . mysql_error());
	}
	else
	{
		header("Location:admin.php");
	}


mysql_close();
?>
