<html>
<head>
<style type="text/css">
<!--
@import url("style.css");
-->
</style>
</head>
<body>
<?php include "header.php";?>
<form action="updateback.php" method="POST">
<table  id="box-table-a" summary="Update">
<?php 
include "essential.php";
session_start();
check_login();

if(!isset($_SESSION['user'])){
	header("location:kapilindex.php?You are not logged in");
	die();
}
$table=$_SESSION['tab_name'];
 dbconnect($_SESSION['user'],$_SESSION['password']);
$ctr=0;
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
				?><input type='hidden' name='attr<?php echo $ctr;?>' value='<?php echo $col1;?>'/> <?php
			}
		if($col1=="PRI"){
			$pri=$j;
			$j2=$j2+1;
			?>
				<input type='hidden' name='pri' value='<?php echo $pri;?>'/>
				<?php
		}
		$j1++;
	}
	$ctr++;

}
$items=$_POST["update"];
?>
				<input type='hidden' name='prim' value='<?php echo $items;?>'/>
<?php
$items="'".$items;
$items=$items."'";
$query = "SELECT * FROM $table WHERE $pri=$items";
$rv = mysql_query( $query , $con);
$result2 = mysql_query("SHOW FIELDS FROM $table",$con);
$num = mysql_numrows($rv);
if(!$rv)
  {
  die('Error: ' . mysql_error());

  }
?>
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
				?><td><font face="Arial, Helvetica, sans-serif"><?php echo $col1;?></font></td>
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
</tr>
<?php
$i=0;
$ctr=0;
while ($row=mysql_fetch_row($rv)){
	?>
		<tr>
		<?php
		$i=0;
	foreach($row as $col){
		?>
		<td> <input type="text" value="<?php echo $col;?>"name="val<?php echo $ctr;?>" id="val".<?php echo $ctr;?> />  </td>

			<?php
		$ctr++;
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
		print "</br>";
}
?>
</table>
<input type="submit" name='up' value='Update' style="margin:0 20px 0 0"/>
<?php
mysql_close();
?>
</body>
</html>
<?php
include "footer.php";?>
