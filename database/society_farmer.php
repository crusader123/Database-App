<?php include "header.php";?>
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
include("essential.php");
if(isset($_GET['st']))                                                          //paging variable
	$mstart=$_GET['st'];
else
	$mstart=0;
$lim=10;
session_start();
$soc_id=$_SESSION['society'];
$table="FARMER";
$table1="VILLAGE";
$table2="ESTIMATE";

dbconnect('admin','admin');
$query="SELECT f.Name,f2.Estimate_Qty FROM $table AS f,$table1 as f1,$table2 as f2 where f.Village_Code=f1.Village_Code and f.Farmer_Code=f2.Farmer_Code and f1.Society_Code=$soc_id";
//$result=mysql_query($query,$con);
$result=paginate("society_farmer.php",$query,$mstart,$lim);
$result2 = mysql_query("SHOW FIELDS FROM $table",$con);
$num=mysql_numrows($result);
?>
<form action="society_work.php" method="POST">

<table id="box-table-a" summary="Society-Farmer Detail">
<thead>
<tr>
	<th><font face="Arial, Helvetica, sans-serif">Farmer_Name</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Estimate_Qty</font></th>
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
</form>
</body>
</html>
<?php include "footer.php";?>
