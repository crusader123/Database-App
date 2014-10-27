<?php
session_start();
include("header.php");
include("essential.php");
check_login();
echo "<h2>You selected ";
$pst=$_GET['tanm'];
$_SESSION['tab_name']=$pst;
$a=$_SESSION['tab_name'];
echo "$a</h2></br></br>";
?>
<html>
<head>
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
</head>
<body>
<hr><br>
<h2> Select one of the operation</h2><br>
<table>
<form  action=post>
<tr><td><h3>Press to insert :</h3></td><td><input id="Button1" type="button" class="button1" value="insert" onclick="ins()"/></td></tr>
<tr><td><h3>Press to update :</h3></td><td><input id="Button2" type="button" class="button1" value="update" onclick="upd()"/></td></tr>
<tr><td><h3>Press to delete :</h3></td><td><input id="Button2" type="button" class="button1" value="delete" onclick="del()"/></td></tr>
<tr><td><h3>Press to select :</h3></td><td><input id="Button2" type="button" class="button1" value="select" onclick="sel()"/></td></tr>

</form>
</table>
<br><br><hr>
<h3>IF U WANT TO GO BACK TO MAIN MENU,CLICK ON THE main menu:</h3>
<a href="admin_op11.php">main menu</a>
</body>
</html>
<?php include("footer.php");?>




