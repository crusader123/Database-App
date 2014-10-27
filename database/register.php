<?php
include("header.php");
include("essential.php");
?>
<html>
		 <body >

		<p>
		<table class ='center'>
		<tr>
		<td><img src ='static/logo.gif' alt=''/></td>
		<td style='font-size: 18pt'>SUGARCANE TRANSFER SYSTEM</td>
		</tr>
		</table>
		</p>
           	<table class ='center'>
            	<tr >
               <td width="35%">
                <form action="reg.php" method="POST">
                        <div class="bak"/>
                          <table class="homeText"  id="reg_table">
                          <br />
                                <tr>
                                <td > <strong >Username : </strong></td> <td> <input type="text" value="" name="username" id="username" /> </td>
                                </tr><tr>
                                <td> <strong> Password :</strong> </td> <td><input type="password" value="" name="password" id="password" /></td>
                                </tr>
			<tr>
			<td></td> <td> <input type="submit" value="Register"  style="margin:0 20px 0 0"/></td> 
			</tr>
		</table>
		<br/>
		</form>
		</td>
	    </tr>

	 <table>
	</body>
</html>

<?php include("footer.php");?>
