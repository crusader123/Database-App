<?php
include "header.php"; ?>
<html>
<head>
<script type="text/javascript">

function society_farmer()
{
    window.location="society_farmer.php";
}


function society_worker()
{
    window.location="society_worker.php";
}



</script>
</head>
<body>
<?php
session_start();
if($_POST['Society']){
$_SESSION['society'] = $_POST['Society'];
}
?>
<h3> Select one of the operation</h3>
<form  action=post>
Press to Know Farmers :<input id="Button1" type="button" class="button1" value="society_farmer" onclick="society_farmer()"/><br>

Press to Know Workers :<input id="Button2" type="button" class="button1" value="society_worker" onclick="society_worker()"/><br>


</form>


<a href="kapilindex.php">Back</a>
</body>
</html>

<?php
include "footer.php"; ?>
