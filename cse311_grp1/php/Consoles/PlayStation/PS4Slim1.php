<?php

session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: LoginPage.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PlayStation 4 Slim 500GB</title>
	<link rel="shortcut icon" type="image/x-icon" href="../../../images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../../../Css/Consoles/PlayStation/PS4.css">
</head>
<body>
	<div class="mainBody">	
		<div class="header">
			<div class="logo">
			<a href="../../Homepage.php">
				<img src="../../../images/Logo.png" align="left" width="107px" height="95px">
			</a>
			</div>
			<div class="navbar">
				<a href="../../Homepage.php">Home</a>
  				<div class="dropdown">
    				<button class="dropbtn">Products
      					<i class="fa fa-caret-down"></i>
    				</button>
    				<div class="dropdown-content">
      					<a href="../../PSProductPage.php">PlayStation</a>
      					<a href="../../XboxProductPage.php">Xbox</a>
      					<a href="../../KeyBoardPage.php">Gaming Keyboards</a>
      					<a href="../../monitor.php">Monitors</a>
      					<a href="../../MousePage.php">Gaming Mice</a>
      					<a href="../../ControllerPage.php">PS4 Controllers</a>
    				</div>
  				</div>
  				<a href="../../PSProductPage.php">PlayStation</a>
  				<a href="../../XboxProductPage.php">Xbox</a>
  				<div class="dropdown">
    				<button class="dropbtn">Games 
      					<i class="fa fa-caret-down"></i>
    				</button>
    				<div class="dropdown-content">
      					<a href="../../pcgames.php">PC</a>
      					<a href="../../xboxgames.php">Xbox</a>
      					<a href="../../ps4games.php">PlayStation</a>
    				</div>
  				</div>
  				<a href="#">About</a>
  				<a href="#">Contact Us</a> 
  				<div class="search">
					<form action="#">
						<input type="text" name="search" class="searchbar">
						<input type="submit" name="srchbtn" class="srchbtn" value="Search">
					</form>
				</div>
			</div>
		<div class="login">
			<a href=#><?php echo htmlspecialchars($_SESSION["username"]); ?>
			<a href="logout.php">Logout</a>	
		</div>
			<br><br>
			<div class="section">
				<a href="../../../images/PlayStation/PS4Slim.jpg">
				<img src="../../../images/PlayStation/PS4Slim.jpg">
			</a>
			</div>
			<div class="section">
				<p>
				Product Id: PS4100
			</p>
			<p>
				Product Name: Play Station 4 Slim 8Gb RAM / 500GB HDD
			</p>
			<p>
				Price: 26,000 Tk
			</p>
			<p>
				Brand: Sony
			</p>
			<p>
				Availability: In Stock
			</p>
			<button type="button" onclick="window.location.href='../../php/LoginPrompt.php'">Buy Now</button>
		</div>
		<br><br><br>
		<div class="description">
			<h2>
				Description:
			</h2>
			<p>
				Sony PS4 Slim Jet Black Gaming Console comes with x86-64 AMD Jaguar, 8 cores Processor, 8GB GDDR5 RAM, 500GB Storage with 1.84 TFLOPS, AMD Radeon based graphics. This PS4 supports BD x 6 CAV, DVD x 8 CAV Disk / Media and also 2 x Super-Speed USB3.1 Gen 1, 1 x AUX Input / Output ports are available here. This PS4 comes with 1x Wireless Controller, LAN, WiFi, Bluetooth connectivity, AC 100-240V, 50/60Hz power, Max. 165W Power consumption, HDMI AV Output. It provides 5degree C - 35degree C Operating Temperator. The PS4 Slim Jet has 07 days Replacement Warranty and 01 year service warranty.
			</p>
		<table bgcolor="#393939">
			<tr>
				<th colspan="2" >Specification</th>
			</tr>
			<tr>
				<td>Model</td>
				<td>PlayStation 4 Slim</td>
			</tr>
			<tr>
				<td>Processor</td>
				<td>x86-64 AMD Jaguar</td>
			</tr>
			<tr>
				<td>RAM and HDD</td>
				<td>8GB GDDR5 RAM+ 500GB Storage</td>
			</tr>
			<tr>
				<td>GPU</td>
				<td>1.84 TFLOPS, AMD Radeon based Graphics</td>
			</tr>
			<tr>
				<td>Disk Drive</td>
				<td>4K UHD Blue Ray</td>
			</tr>
			<tr>
				<td>Controller</td>
				<td>1x Wireless Controller (included)</td>
			</tr>
			<tr>
				<td>Dimension</td>
				<td>288mm x 265mm x 39 mm</td>
			</tr>
			<tr>
				<td>Weight</td>
				<td>3.3kg (7.3lbs)</td>
			</tr>
			<tr>
				<td>Color </td>
				<td>Black</td>
			</tr>
			
			<tr>
				<td>Warranty</td>
				<td>01 Years Warranty</td>
			</tr>
		</table>
		</div>

		<div class="footer">
			<p> Powered By Group-1</p>
		</div>
	</div>	

</body>
</html>