<?php
include("header.php");?>
<?php
include("essential.php");
if(isset($_SESSION['user'])){
 header('Location:admin.php');
}

//echo "<html><body>";
echo"<p class='welcome'><br/><br/>";
echo "</p><h2 align='left'>Login</h2></br></br></br></br>";
echo '
<form action="log.php" method="POST">
			<table>
				<tr>
				<td > <strong >Username : </strong></td> <td> <input type="text" value="" name="username" id="username" /> </td>
				</tr><tr> 
				<td> <strong> Password :</strong> </td> <td><input type="password" value="" name="password" id="password" /></td>
				</tr><tr>
				<tr></tr>
				<td></td>
				<td>  <input type="submit" value="Login" style="margin:0 20px 0 0"/>  <a href="./register.php">Register</a> </td>
				</tr>
		          </table>
		</form>

';
?>
<hr>
</br></br></br>
<h2 align='left'>Queries</h2></br>
<?php



echo "<table><form action='farmer_per_pay_detail.php' method='post'>";

echo "<tr><td>Enter Your Account_No  to know your Balance:</td> <td><input type='text' name='farmer_account_no' /></td>";
echo "<td><input type='submit' value='Show Amount'/></td></tr>";
echo "</form>";
echo "<form action='society_work.php' method='post'>";
echo "<tr><td>Enter Your Society_id  to see your Society_Details:</td><td> <input type='text' name='Society' /></td>";
echo "<td><input type='submit' value='Show Society Details'/></td></tr>";
echo "</form>";
echo "<form action='society_village.php' method='post'>";
echo "<tr><td>Enter Your Village Name  to see your Society:</td> <td><input type='text' name='village' /></td>";
echo "<td><input type='submit' value='Show Society which Belong to My Village'/></td></tr>";
echo "</form></table>";
//echo "</body></html>";?>
<?php
include("footer.php");?>
