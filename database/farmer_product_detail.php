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
include("header.php");
include("essential.php");
if(isset($_GET['st']))                                                          //paging variable
 	$mstart=$_GET['st'];
else
	$mstart=0;
$lim=10;

$table="FARMER";
$table1="PRODUCTION";
$table2="VARIETY";
dbconnect('admin','admin');
$query="SELECT f.Name,f1.Production,f1.Purchase,v.Name FROM $table AS f,$table1 as f1,$table2 as v where f.Farmer_Code=f1.Farmer_Code and f1.Variety_Code=v.Variety_Code";
$result=paginate("farmer_product_detail.php",$query,$mstart,$lim);

//$result=mysql_query($query,$con);
$result2 = mysql_query("SHOW FIELDS FROM $table",$con);
$num=mysql_numrows($result);
?>
<form action="admin.php" method="POST">
<table id="box-table-a" summary="Farmer Product Detail">
<thead>
<tr>
	<th><font face="Arial, Helvetica, sans-serif">Farmer_Name</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Production_Qty</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Purchase_Qty</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Variety of Sugarcane</font></th>
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
		<?php
mysql_close();
?>
<input type='submit' value='Back'>
</tbody>
		</table>
</form>
</body>
</html>
<?php
include("footer.php");?>
