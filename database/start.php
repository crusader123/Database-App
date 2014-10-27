<?php
include("essential.php");
dbconnect('root','');
$table='USERS';
$query="SELECT * FROM $table";
$result=mysql_query($query,$con);
while ($row=mysql_fetch_row($result)){
	$query2="CREATE USER '$row[1]'@'localhost' IDENTIFIED BY '$row[2]'";
	$rv = mysql_query( $query2 , $con);
	if(!$rv)
	{
		$query2="DROP USER '$row[1]'@'localhost'";
		$rv = mysql_query( $query2 , $con);
		$query2="CREATE USER '$row[1]'@'localhost' IDENTIFIED BY '$row[2]'";
		$rv = mysql_query( $query2 , $con);
		if(!$rv){
			echo"kapil $row[1] $row[2]";
		die(mysql_error());
		}
	}
	if($row[1]!="admin")
	{
	echo "not</br>";
	$query2="GRANT SELECT on USERS to '$row[1]'@'localhost'";
	}
	else{
echo "yes</br>";
	$query2="GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' WITH GRANT OPTION";
	}
	$rv = mysql_query( $query2 , $con);
	if(!$rv)
	{
		die(mysql_error());
	}
}
?>
