<?php
include("header.php");?>
<html>
<body>
<head>
<style type="text/css">
<!--
@import url("style.css");
-->
</style>
</head>
<?php
session_start();
include("essential.php");
check_login();
echo "<a href='logout.php'>Logout</a></br>";
$num_attr=$_POST['num_attr'];
$_SESSION['new_table']=$_POST['new_table'];
$_SESSION['num_attr']=$_POST['num_attr'];
$table=$_SESSION['new_table'];
dbconnect($_SESSION['user'],$_SESSION['password']);
?>
<form action="confirmcreate.php" method="POST">
<table id="box-table-a" summary="Farmer Detail">
<?php
		$j=0;
		
while ($j<$num_attr) 
{ ?>		
		<tr>
		<td > <strong ><?php echo "Attr.$j Name";?> : </strong></td> 
		<td> <input type="text" value="" name="<?php echo"attr".$j;?>" id="<?php echo "attr".$j;?>" />  </td>
		<td> <input type="radio" value="char" name="<?php echo "type".$j;?>"  />  </td>
		<td> Char  </td>
		<td> <input type="radio" value="int" name="<?php echo "type".$j;?>" />  </td>
		<td> Int  </td>
		<td> <input type="radio" value="<?php echo"$j";?>" name="primary" />  </td>
		<td> Add as Primary Key  </td>
	        </tr>
<?php	
			$j=$j+1;
}?>
		</table>
		 <input type="submit" name='create' value='Create' style="margin:0 20px 0 0"/>
		<?php
mysql_close();
?>
</body>
</html>
<?php
include("footer.php");
?>
