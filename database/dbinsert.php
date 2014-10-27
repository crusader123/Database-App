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
?> <form action="admin_op.php?tanm=<?php echo $table;?>" method="POST">
<input type='submit' value='Back'>
</form>
<?php
dbconnect($_SESSION['user'],$_SESSION['password']);
$query="SELECT * FROM $table";
$result=mysql_query($query,$con);
$result2 = mysql_query("SHOW FIELDS FROM $table",$con);
$num=mysql_numrows($result);
?>
<form action="confirminsert.php" method="POST">
<table id="box-table-a" summary="Insert format">
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
?>		<tr>
		<td > <strong ><?php echo $col1;?> : </strong></td> <td> <input type="text" value="" name="<?php echo $col1;?>" id="<?php echo $col1;?>" />  </td>
	        </tr>

<?php
			}
	if($j2==1)
	{
		$j2=0;
	?>
		<?php
		}
	?>

	<?php
		}
			$j1=$j1+1;
		}
			$j=$j+1;
}?>
		</table>
		 <input type="submit" name='insert' value='Insert' style="margin:0 20px 0 0"/>



		<?php
mysql_close();
?>
</body>
</html>
<?php
include("essential.php");?>
