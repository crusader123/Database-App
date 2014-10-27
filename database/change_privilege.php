<?php
include("header.php");?>
<html>
<head>
<style type="text/css">
<!--
@import url("style.css");
-->
</style>
</head>
<body>
<form action="confirm_change_privileges.php" method="POST">
<table id="box-table-a" summary="Change Permission">
<?php
session_start();
include("essential.php");
check_login();

$table=$_GET['table'];
$_SESSION['tab_name']=$table;
$privileges=$_GET['change'];
$privileges=explode(",",$privileges);
$counter=count($privileges);
$i=0;
$privileges_check=array('INSERT' => 0,'UPDATE' => 0,'DELETE' => 0,'SELECT' => 0);
while($i<$counter)
{
		
	$t=$privileges[$i];
	$privileges_check[$t]=1;
	$i++;
}
if($privileges_check['INSERT']==1)
{
?>
	<tr><td> Insert </td><td><input type="checkbox" name='change[]' value='insert' checked='checked'</td></tr>
<?php
}
else
{
?>
	<tr><td> Insert </td><td><input type="checkbox" name='change[]' value='insert'</td></tr>
<?php
}
if($privileges_check['DELETE']==1)
{
?>
	<tr><td> Delete </td><td><input type="checkbox" name='change[]' value='delete' checked='checked'</td></tr>
<?php
}
else
{
?>
	<tr><td> Delete </td><td><input type="checkbox" name='change[]' value='delete'</td></tr>
<?php
}
if($privileges_check['UPDATE']==1)
{
?>
	<tr><td> Update </td><td><input type="checkbox" name='change[]' value='update' checked='checked'</td></tr>
<?php
}
else
{
?>
	<tr><td> Update </td><td><input type="checkbox" name='change[]' value='update'</td></tr>
<?php
}
if($privileges_check['SELECT']==1)
{
?>
	<tr><td> Select </td><td><input type="checkbox" name='change[]' value='select' checked='checked'</td></tr>
<?php
}
else
{
?>
	<tr><td> Select </td><td><input type="checkbox" name='change[]' value='select'</td></tr>
<?php
}

?>
</table>
 <input type="submit" name='chan' value='Change' style="margin:0 20px 0 0"/>
</form>
</body>
</html>
<?php
include("footer.php");?>
