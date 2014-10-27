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
$VIL_NAME=$_POST['village'];

$vil=$VIL_NAME;
$table="VILLAGE";
$table1="SOCIETY";

dbconnect('admin','admin');
$query="SELECT f.Name,f1.Name,f1.Location FROM $table AS f,$table1 as f1 where f.Society_Code=f1.Society_Code and f.Name='$vil'";
$result=mysql_query($query,$con);
$result2 = mysql_query("SHOW FIELDS FROM $table",$con);
$num=mysql_numrows($result);
?>
<form action="kapilindex.php" method="POST">
<table id="box-table-a" summary="Village-Society Detail">
<thead>

<tr>
	<th><font face="Arial, Helvetica, sans-serif">Village</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Society_Name</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Location</font></th>
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
<input type='submit' value='Back'/>
</tbody>		
</table>
		<?php
mysql_close();
?>
</form>
</body>
</html>
<?php include "footer.php";?>
