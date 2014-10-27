<?php include "essential.php";
check_login();
session_start();
$table=$_SESSION['tab_name'];
 dbconnect($_SESSION['user'],$_SESSION['password']);
$result2 = mysql_query("SHOW FIELDS FROM $table",$con);
$j="pri";
$pri='kapil';
while ($row2 = mysql_fetch_row($result2)) 
{?>
	<?php
		$j1=0;
	foreach($row2 as $col1){
		?>
		
			<?php
			if($j1==0){
				$j=$col1;
			}
			if($col1=="PRI"){
				$pri=$j;
				$j2=$j2+1;
			}
			$j1++;
	}
	
}
if ($_POST["Del1"]) {
	$deleted_items = join(', ', $_POST["Del1"]);
	
	$query = "DELETE FROM $table WHERE $pri IN ($deleted_items)";
	$rv = mysql_query( $query , $con);
//	 die('Error: ' . mysql_error());
}
if(!$rv)
{
	 die('Error: ' . mysql_error());

}
else
{
	header("Location:db_delete.php");
}
mysql_close();
?>
