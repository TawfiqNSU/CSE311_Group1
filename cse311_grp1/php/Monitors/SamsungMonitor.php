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
	<title>Samsung 32 CHG70 Gaming Monitor </title>
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
				<a href="../../images/Monitors/32 CHG70 Gaming Monitor with Quantum Dot 42000.jpg">
				<img src="../../images/Monitors/32 CHG70 Gaming Monitor with Quantum Dot 42000.jpg">
			</a>
			</div>
			<div class="section">
				<p>
				Product Id: GMC100
			</p>
			<p>
				Product Name:Samsung 32 CHG70 Gaming Monitor 
			<p>
				Price: 42,000 Tk
			</p>
			<p>
				Brand: Samsung.
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
				<td>Samsung</td>
			</tr>
			<tr>
				<td>Screen Size	</td>
				<td>32"</td>
			</tr>
			<tr>
				<td>Resolution</td>
				<td>2,560 x 1,440</td>
			</tr>
			<tr>
				<td>Brightness	</td>
				<td>Brightness (Typical): 300cd/m2<br>
					Peak Brightness (Typical): N/A<br>
					Brightness (Min): 250cd/m2</td>
			</tr>
			<tr>
				<td>Viewing Angle	</td>
				<td>178°(H)/178°(V)</td>
			</tr>
			<tr>
				<td>Contrast Ratio</td>
				<td>3,000:1(Typ.)</td>
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
				<td>144Hz</td>
			</tr>
			<tr>
				<td>Dimension</td>
				<td>Set Dimension with Stand (WxHxD): 712.5 x 519.5 x 242.8 mm<br>
					Set Dimension without Stand (WxHxD): 712.5 x 418.5 x 147.5 mm</td>
			</tr>
			<tr>
				<td>Weight	</td>
				<td>Set Weight with Stand: 5.8 kg<br>
				Set Weight without Stand: 5.2 kg
				</td>
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