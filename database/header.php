<?php session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Free CSS template by ChocoTemplates.com</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">Upper Doab Sugar Mill</a></h1>
			<div id="top-navigation">
				Welcome <a href="#"><strong><?php echo $_SESSION['user'];?></strong></a>
				<span>|</span>
				<a href="logout.php">Log out</a>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			     <?php if($_SESSION['user']=='admin'){;?>

			    <li><a href="admin.php"><span>Home</span></a></li>
			    <li><a href="farmer_bank_detail.php"><span>Farmer Bank A/c</span></a></li>
			    <li><a href="farmer_detail.php"><span>Farmers Personal Details</span></a></li>
			    <li><a href="farmer_payment_detail.php"><span>Payment Detail</span></a></li>
			    <li><a href="farmer_product_detail.php"><span>Farmer Production</span></a></li>
			    <?php } else {;?>
			    <li><a href="#"><span>Home</span></a></li>
			    <li><a href="#"><span>Farmer Bank A/c</span></a></li>
			    <li><a href="#"><span>Farmers Personal Details</span></a></li>
			    <li><a href="#"><span>Payment Detail</span></a></li>
			    <li><a href="#"><span>Farmer Production</span></a></li>
			    <?php };?>
				      
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>
<!-- End Header -->

	
