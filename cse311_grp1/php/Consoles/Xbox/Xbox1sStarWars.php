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
	<title>Xbox One S StarWars Edition</title>
	<link rel="shortcut icon" type="image/x-icon" href="../../../images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../../../Css/Consoles/Xbox/Xbox.css">
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
				<a href="../../../images/Xbox/Xbox1sStarWars.jpg">
				<img src="../../../images/Xbox/Xbox1sStarWars.jpg">
			</a>
			</div>
			<div class="section">
				<p>
				Product Id: XBX104
			</p>
			<p>
				Product Name: Xbox One S Star Wars: Jedi Fallen Order Edition
			</p>
			<p>
				Price: 30,000 Tk
			</p>
			<p>
				Brand: Microsoft
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
				Microsoft Xbox One S 8GB RAM,1TB Gaming Console is comes with 8 core Jaguar CPU at 1.75GHz Processor, 8GB DDR3 RAM, 1TB Storage, 12 CUs (914MHz) 1.23 TF GPU with 1x Wireless Controller. This Xbox has HDMI-in, HDMI-out, one front-facing USB 3.0, two rear-facing USB 3.0, IR receiver/blaster, SPDIF digital audio, Ethernet Input / Output port. This Xbox One S has 4K UHD Blu Ray and also features with Thousands of games without breaking the bank. The Xbox One S sports thousands of games and 4K media for an affordable price, Feature-filled, and affordable, 4K. This Xbox comes with a copy of Star Wars: Jedi Fallen Order.This Xbox has 07 days Replacement Warranty and 01 year service warranty.	
			</p>
		<table bgcolor="#393939">
			<tr>
				<th colspan="2" >Specification</th>
			</tr>
			<tr>
				<td>Model</td>
				<td>Xbox One S</td>
			</tr>
			<tr>
				<td>Processor</td>
				<td>8 core Jaguar CPU at 1.75GHz</td>
			</tr>
			<tr>
				<td>GPU</td>
				<td>12 CUs (914MHz) 1.23 TF GPU</td>
			</tr>
			<tr>
				<td>RAM and HDD</td>
				<td>8GB Ram and 1TB Storage</td>
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
				<td>11.5 in x 9.0 in x 2.50 in (30cm x 24cm x 6cm)</td>
			</tr>
			<tr>
				<td>Weight</td>
				<td>6.4 lbs(2.9kg)</td>
			</tr>
			<tr>
				<td>Included within</td>
				<td>1 X Star Wars: Jedi Fallen Order</td>
			</tr>
			<tr>
				<td>Color </td>
				<td>White</td>
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