<html>
<head>
<style type="text/css">
<!--
@import url("style.css");
-->
</style>

<script type="text/javascript">

function ins()
{
    window.location="dbinsert.php";
}

function upd()
{
    window.location="dbupdate.php";
}
function del()
{
    window.location="db_delete.php";
}
function sel()
{
    window.location="db_select.php";
}

</script>
</body>
</html>


<?php
session_start();
$nm=$_SESSION['user'];
include("header.php");
include("essential.php");
check_login();
 dbconnect($_SESSION['user'],$_SESSION['password']);
$result=array();
?> <form action="admin.php" method="POST">
<input type='submit' value='Back'>
</form>
<?php

$sql = "SHOW TABLES";

$result1 = mysql_query($sql,$con);


if (!$result1) {

    echo "DB Error, could not list tables\n";

    echo 'MySQL Error: ' . mysql_error();

    exit;

}
$count=0;
while($row=mysql_fetch_row($result1))
{
$result[$count]=$row[0];
$count++;
}
echo "<br>";
$i=0;
echo "<table id='box-table-a' summary='Tables'><tr><th>Tables</th></tr>";
while($i<count($result))
{
echo "<tr><td>";
echo "<a href='admin_op.php?tanm=$result[$i]'>$result[$i]</a>";
echo "</th></tr>";



$i++;
}
echo "</table>";
include("footer.php");
?>

