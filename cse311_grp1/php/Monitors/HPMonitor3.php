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
	<title>HP EliteDisplay E243 23.8-inch Monitor</title>
	<link rel="shortcut icon" type="image/x-icon" href="../../images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../../Css/Monitor/Monitor.css">
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
				<a href="../../images/Monitors/HP EliteDisplay E243 23.8-inch Monitor 15215.jpg">
				<img src="../../images/Monitors/HP EliteDisplay E243 23.8-inch Monitor 15215.jpg">
			</a>
			</div>
			<div class="section">
				<p>
				Product Id: GMC100
			</p>
			<p>
				Product Name:HP EliteDisplay E243 23.8-inch Monitor 
			<p>
				Price: 15,800Tk
			</p>
			<p>
				Brand: HP.
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
				<td>HP</td>
			</tr>
			<tr>
				<td>Panel Type</td>
				<td>IPS w/LED backlight<br>
					Bright View Panel</td>
			</tr>
			<tr>
				<td>Screen Size	</td>
				<td>23.8-inch</td>
			</tr>
			<tr>
				<td>Resolution</td>
				<td>1920 x 1080</td>
			</tr>
			<tr>
				<td>Brightness	</td>
				<td>250 cd/m²</td>
			</tr>
			<tr>
				<td>Viewing Angle	</td>
				<td>178°(H)/178°(V)</td>
			</tr>
			<tr>
				<td>Contrast Ratio</td>
				<td>1000:1 static<br>
				10000000:1 dynamic</td>
			</tr>
			<tr>
				<td>Aspect Ratio</td>
				<td>16:9</td>
			</tr>
			<tr>
				<td>Color Support</td>
				<td>16.7M</td>
			</tr>
			<tr>
				<td>Refresh Rate</td>
				<td>Up to 60 Hz</td>
			</tr>
			<tr>
				<td>Dimension</td>
				<td>21.21 x 1.78 x 12.67 in</td>
			</tr>
			<tr>
				<td>Weight	</td>
				<td>12.32 lbs</td>
			</tr>
			<tr>
				<td>Warranty</td>
				<td>03 Years Warranty</td>
			</tr>
		</table>
		</div>

		<div class="footer">
			<p> Powered By Group-1</p>
		</div>
	</div>	

</body>
</html>