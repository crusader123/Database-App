<?php include "essential.php";
session_start();
check_login();
echo "<a href='logout.php'>Logout</a></br>";
$table=$_SESSION['tab_name'];
echo $_SESSION['user'];
echo $_SESSION['password'];
 dbconnect($_SESSION['user'],$_SESSION['password']);
$result2 = mysql_query("SHOW FIELDS FROM $table",$con);
$j="pri";
$pri='kapil';
$query='';
while ($row2 = mysql_fetch_row($result2)) 
{?>
	<?php
		$j1=0;
	foreach($row2 as $col1){
		?>
		
			<?php
			if($j1==0){
				$j=$col1;
				if($query!=""){
				$query=$query.",";}
				$query=$query."'";
				$query=$query. $_POST[$col1];
				$query=$query."'";
			}
			$j1++;
	}
	
}

	$query1 = "insert into $table values($query)";
	
	$rv = mysql_query( $query1 , $con);


if(!$rv)
{
	die('Error: ' . mysql_error());
}
else
{
	header("Location:admin_op.php?tanm=$table");
}


mysql_close();
?>
