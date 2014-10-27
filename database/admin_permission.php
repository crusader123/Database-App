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
check_login();
session_start();
 dbconnect($_SESSION['user'],$_SESSION['password']);
$getusers=mysql_query("select id,username from USERS",$con);
echo "<table id='box-table-a' summary='User Account'>
<tr>
<th>id</th>
<th>User</th>
</tr>";

while($row = mysql_fetch_array($getusers))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<form action='show_privilege.php' method='post'>";
echo "<h3>Enter the Username to know his permissions:</h3> <input type='text' name='username_table' />";
echo "<input type='submit' value='show permissions'/>";
echo "</form>";

mysql_close($con);
include("footer.php");
?>
</body>
</html>
