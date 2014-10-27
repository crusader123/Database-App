<?php
include("header.php");
include("essential.php");
check_login();
session_start();
?>

<html>
<head>

<?php //<link rel="stylesheet" type="text/css" href="butdes.css" />?>

<script type="text/javascript">
i=99;
function re()
{
    window.location="admin_op11.php";
}

function bro()
{
    window.location="admin_permission.php";
}
function farmer_bank_detail()
{
    window.location="farmer_bank_detail.php";
}

function farmer_resident_detail()
{
    window.location="farmer_detail.php";
}
function farmer_payment_detail()
{
    window.location="farmer_payment_detail.php";
}
function farmer_product_detail()
{
    window.location="farmer_product_detail.php";
}
</script>
</head>
<body>
<h3> Select one of the operation</h3>
<table>
<form  action=post>
<br>
<tr><td><input id="Button1" type="button" class="button1" value="Normal_operations" onclick="re()"/></td>
<?php
if($_SESSION['user']=="admin"){?>
<td><input id="Button2" type="button" class="button1" value="user_permissions" onclick="bro()"/></br></td></tr>
	<tr><td><br></td><td><br></td></tr>
<tr><td>Press to Farmers_Bank_Details :</td><td><input id="Button2" type="button" class="button1" value="Account-Details" onclick="farmer_bank_detail()"/></td></tr>
<tr><td>Press to Farmers_Resident_Details :</td><td><input id="Button2" type="button" class="button1" value="Resident-Details" onclick="farmer_resident_detail()"/></td></tr>
<tr><td>Press to Farmers_Payments_Detail :</td><td><input id="Button2" type="button" class="button1" value="Payment-Details" onclick="farmer_payment_detail()"/></td></tr>
<tr><td>Press to Farmers_Products_Detail :</td><td><input id="Button2" type="button" class="button1" value="Product-Details" onclick="farmer_product_detail()"/></td></tr>
	<tr><td><br></td><td><br></td></tr>

</form>
<form action="createtable.php" method="POST">
<tr>
<td> New Table Name:</td><td><input type="text" name="new_table" id="new_table" value=""/></td></tr><tr>
<td> Num of Attributes:</td><td><input type="text" name="num_attr" id="num_attr" value=""/></td></tr>
<tr><td>Press to Create New Table :</td><td><input type="submit" name="create_table" value="Create-Table"/></td></tr>
	<tr><td><br></td><td><br></td></tr>
</form>
<form action="droptable.php" method="POST">

<tr><td> Type Table Name:</td><td><input type="text" name="drop_table" id="drop_table" value=""/></td></tr>
<tr><td>Press to Drop Table :</td><td><input type="submit" name="drop" value="Drop"/></td></tr>
</form>
<?php }else {?>
</tr></form> 
<?php	}?>
</table>
</body>
</html>
<?php  
include("footer.php");
?>

