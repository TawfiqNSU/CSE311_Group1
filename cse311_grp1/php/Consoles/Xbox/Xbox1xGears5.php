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
	<title>Xbox One X Gears5 Edition </title>
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
				<a href="../../../images/Xbox/XboxGears5.jpg">
				<img src="../../../images/Xbox/XboxGears5.jpg">
			</a>
			</div>
			<div class="section">
				<p>
				Product Id: XBX102
			</p>
			<p>
				Product Name: Xbox One X Gears 5 Edition
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
				Microsoft Xbox One X Gaming Console comes with 8-core Jaguar Evolved CPU at 2.3GHz, 12GB GDDR5 RAM, 1TB Storage with 40 CUs (1,172Mhz) 6 TF GPU. This stylish Xbox One X features with 4K UHD Blu Ray Optical drive with 40% more power than any other console, experience immersive true 4K gaming. Games play better on Xbox One X. Here The 8-core Custom AMD CPU is clocked at 2.3GHz to bring enhanced AI and also it's 12GB GDDR5 of graphic memory add speed and power to game performance to enable bigger worlds, further horizons, and quicker load times.By this Xbox One X, you can only play 4K games like NBA 2K20, Forza Horizon 4, Star Wars Jedi: Fallen Order, Gears 5, and Cyberpunk 2077 the way to be played on Xbox One X. This exclusive Xbox One X Gaming Console has 07 days Replacement Warranty and 01 year service warranty. Comes included with a copy of Gears 5 features a white Gears 5 skin.	
			</p>
		<table bgcolor="#393939">
			<tr>
				<th colspan="2" >Specification</th>
			</tr>
			<tr>
				<td>Model</td>
				<td>Xbox One X</td>
			</tr>
			<tr>
				<td>Processor</td>
				<td>8 core Jaguar Evolved CPU 2.3GHz Processor</td>
			</tr>
			<tr>
				<td>RAM and HDD</td>
				<td>12GB Ram and 1TB Storage</td>
			</tr>
			<tr>
				<td>Disk Drive</td>
				<td>4K UHD Blue Ray</td>
			</tr>
			<tr>
				<td>Controller</td>
				<td>1x Wireless Controller Gears 5 themed (included)</td>
			</tr>
			<tr>
				<td>Dimension</td>
				<td>11.81 in x 9.45 in x 2.36 in (30cm x 24cm x 6cm)</td>
			</tr>
			<tr>
				<td>Weight</td>
				<td>8.4lbs (3.81 kg)</td>
			</tr>
			<tr>
				<td>Color </td>
				<td>White Gears5 themed skin</td>
			</tr>
			<tr>
				<td>Included within</td>
				<td>1 X Gears 5</td>
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