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
	<title>Razer Naga Trinity</title>
	<link rel="shortcut icon" type="image/x-icon" href="../../images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../../Css/Mice/GamingMice.css">
</head>
<body>
	<div class="mainBody">	
		<div class="header">
			<div class="logo">
			<a href="../Homepage.php">
				<img src="../../images/Logo.png" align="left" width="107px" height="95px">
			</a>
			</div>
			<div class="navbar">
				<a href="../Homepage.php">Home</a>
  				<div class="dropdown">
    				<button class="dropbtn">Products
      					<i class="fa fa-caret-down"></i>
    				</button>
    				<div class="dropdown-content">
      					<a href="../PSProductPage.php">PlayStation</a>
      					<a href="../XboxProductPage.php">Xbox</a>
      					<a href="../KeyBoardPage.php">Gaming Keyboards</a>
      					<a href="../monitor.php">Monitors</a>
      					<a href="../MousePage.php">Gaming Mice</a>
      					<a href="../ControllerPage.php">PS4 Controllers</a>
    				</div>
  				</div>
  				<a href="../PSProductPage.php">PlayStation</a>
  				<a href="../XboxProductPage.php">Xbox</a>
  				<div class="dropdown">
    				<button class="dropbtn">Games 
      					<i class="fa fa-caret-down"></i>
    				</button>
    				<div class="dropdown-content">
      					<a href="../pcgames.php">PC</a>
      					<a href="../xboxgames.php">Xbox</a>
      					<a href="../ps4games.php">PlayStation</a>
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
				<a href="../../images/Mouse/Razer Naga Trinity-8415.jpg">
				<img src="../../images/Mouse/Razer Naga Trinity-8415.jpg">
			</a>
			</div>
			<div class="section">
				<p>
				Product Id: GMC101
			</p>
			<p>
				Product Name: Razer Naga Trinity
			</p>
			<p>
				Price: 8,415 Tk
			</p>
			<p>
				Brand: Razer
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
		<table bgcolor="#393939">
			<tr>
				<th colspan="2" >Specification</th>
			</tr>
			<tr>
				<td>Manufacturer</td>
				<td>Razer</td>
			</tr>
			<tr>
				<td>Optical Sensor Resolution</td>
				<td>Razer 5G optical sensor with true 16,000 DPI.</td>
			</tr>
			<tr>
				<td>Keys</td>
				<td>3 interchangeable side plates with 2, 7 and 12-button configurations
					Up to 19 programmable buttons</td>
			</tr>
			<tr>
				<td>Cable Length</td>
				<td>2.1 m / 6.89 ft</td>
			</tr>
			<tr>
				<td>Weight</td>
				<td>120 g / 0.26 lbs (Excluding cable)</td>
			</tr>
			<tr>
				<td>Dimension(LxWxH)</td>
				<td>119 mm / 4.69 in (Length) 74 mm / 2.93 in (Width) 43 mm / 1.69 in (Height)</td>
			</tr>
			<tr>
				<td>Mechanical Switches	</td>
				<td>Razer Optical Mouse Switches with 70 million clicks life cycle</td>
			</tr>
			<tr>
				<td>Color Option	</td>
				<td>Razer Chroma™ lighting with 16.8 million customizable color</td>
			</tr>
			<tr>
				<td>Connection Type</td>
				<td>Wired</td>
			</tr>
			<tr>
				<td>Warranty</td>
				<td>02 Years Warranty</td>
			</tr>
		</table>
		</div>

		<div class="footer">
			<p> Powered By Group-1</p>
		</div>
	</div>	

</body>
</html>