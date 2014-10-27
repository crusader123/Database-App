<?php
include("header.php");?>
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
<form action='admin_permission.php' method='post'>
<table id="box-table-a" summary="Select">
<thead>
<tr>
<th><font face="Arial, Helvetica, sans-serif">Table</font></th>
<th><font face="Arial, Helvetica, sans-serif">Privileges</font></th>
<th><font face="Arial, Helvetica, sans-serif">Change Privileges</font></th>
</tr>
</thead>
<tbody>
<?php
session_start();
if($_POST['username_table'])
{
$_SESSION["uname"]=$_POST['username_table'];
}
$table=$_SESSION["uname"];
include("essential.php");
check_login();
 dbconnect($_SESSION['user'],$_SESSION['password']);

$query="SHOW GRANTS FOR '$table'@'localhost'";

$result=mysql_query($query,$con);
$pri_table=array();
$privileges=array();
$count=0;
$check=0;
while ($row=mysql_fetch_row($result)){
	if($check>0)
	{
		$row = explode(" ",$row[0]);
		$total_count=count($row);
		$i1=0;
		$flag=0;
		$privi="";
		while($i1<$total_count)
		{
			if($row[$i1]=="ON")
			{
				$flag=1;
			}	
			if($row[$i1]!="GRANT" and $flag==0)
			{
				$privi=$privi.$row[$i1];
			}
			if($flag==1 and $row[$i1]!="ON")
			{
				$row = explode(".",$row[$i1]);
				$pri_table[$count]=$row[1];
				$privileges[$count]=$privi;
				$count++;
				break;
			}
			$i1++;
		}
	}
	$check++;
}
$result=mysql_query("show tables",$con);
while ($row=mysql_fetch_row($result)){
	$i=0;
	$flag1=0;
	$temp="`".$row[0]."`";
	while($i<$count)
	{
		
		if($temp==$pri_table[$i])
		{
			$flag1=1;
		}
		$i++;
	}
	if($flag1==0){
		$pri_table[$count]=$temp;
		$privileges[$count]='';
		$count++;
	}
}
$i=0;
while($i<$count){
	?>
		<tr>
		<td><font face="Arial, Helvetica, sans-serif"><?php echo "$pri_table[$i]";?></font></td>
		<td><font face="Arial, Helvetica, sans-serif"><?php echo "$privileges[$i]";?></font></td>
		<td><a href='change_privilege.php?table=<?php echo"$pri_table[$i]";?>&change=<?php echo"$privileges[$i]";?>' style='text-align:right'>Change</a></td>
		</tr>
		<?php
		$i++;
}
?>
<input type='submit' value='Back'>
</tbody>
</table>
</form>
</body>
</html>
<?php include("footer.php")?>
