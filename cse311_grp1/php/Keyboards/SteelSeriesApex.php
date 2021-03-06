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
	<title> SteelSeries Apex 7 Mechanical Keyboard</title>
	<link rel="shortcut icon" type="image/x-icon" href="../../images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../../Css/Keyboard/Keyboard.css">
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
				<a href="../../images/Keyboards/APEX.jpg">
				<img src="../../images/Keyboards/APEX.jpg">
			</a>
			</div>
			<div class="section">
				<p>
				Product Id: GMC100
			</p>
			<p>
				Product Name: SteelSeries Apex 7 Mechanical Keyboard
			</p>
			<p>
				Price: 19,900 Tk
			</p>
			<p>
				Brand: SteelSeries
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
				<td>SteelSeries</td>
			</tr>
			<tr>
				<td>Type</td>
				<td>RGB Mechanical Gaming Keyboard.</td>
			</tr>
			<tr>
				<td>Wired/Wireless	</td>
				<td>Wired Connectivity: USB 2.0 Type-A</td>
			</tr>
			<tr>
				<td>Keys</td>
				<td>N-Key Roll Over: 104-Key<br>
					Illumination: Dynamic Per Key RGB Illumination
			</tr>
			<tr>
				<td>Switch Lifecycle</td>
				<td>Lifetime: 50 Million Keypresses</td>
			</tr>
			<tr>
				<td>Color</td>
				<td>Black</td>
			</tr>
			<tr>
				<td>Cable </td>
				<td>Keyboard Cable Type: Braided</td>
			</tr>
			<tr>
				<td>Dimensions</td>
				<td>403.3mm x 139.2mm x 17.2mm</td>
			</tr>
			<tr>
				<td>Weight</td>
				<td>2.1 lbs</td>
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