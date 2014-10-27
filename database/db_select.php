<!DOCTYPE>
<html>
<head>
<style type="text/css">
<!--
@import url("style.css");
-->
</style>
</head>
<body>
<?php
session_start();
include("header.php");
include("essential.php");
check_login();

$table=$_SESSION['tab_name'];
 dbconnect($_SESSION['user'],$_SESSION['password']);
if(isset($_GET['st']))                                                          //paging variable
 $mstart=$_GET['st'];
else
   $mstart=0;
$lim=10;

$query="SELECT * FROM $table";
$result=paginate("db_select.php",$query,$mstart,$lim);

//$result=mysql_query($query,$con);
$result2 = mysql_query("SHOW FIELDS FROM $table",$con);
$num=mysql_numrows($result);
?>
<form action="admin_op.php?tanm=<?php echo $table;?>" method="POST">
<table id="box-table-a" summary="Select">
<thead>
<tr>
<?php
		$j=0;
		$j2=0;
while ($row2 = mysql_fetch_row($result2)) 
{?>
		<?php
		$j1=0;
		foreach($row2 as $col1){
			?>
	<?php
		if($col1=="PRI"){
			$pri=$j;
			$j2=$j2+1;
		}
		if($j1==0 or $j2==1){
			if($j2==0){
?><th><font face="Arial, Helvetica, sans-serif"><?php echo $col1;?></font></th><?php
			}
	if($j2==1)
	{
		$j2=0;
		}
	?>

	<?php
		}
			$j1=$j1+1;
		}
			$j=$j+1;
}?>
</tr>
</thead>
<tbody>
<?php
$i=0;
while ($row=mysql_fetch_row($result)){
	?>
		<tr>
		<?php
		$i=0;
		foreach($row as $col){
			?>
		<td><font face="Arial, Helvetica, sans-serif"><?php echo $col; echo " "; ?></font></td>
	<?php
		if($i==$pri){
			?>

		<?php
		}
		?>
		<?php
		$i++;
}
?>
</tr>
<?php
}
?>
		<input type='submit' value='Back'>
		</tbody>
		</table>
		<?php
mysql_close();
?>
</body>
</html>
<?php
include("footer.php");?>
