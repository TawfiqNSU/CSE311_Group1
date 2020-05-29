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
	<title>Logitech G613 Wireless Mechanical Gaming Keyboard</title>
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
				<a href="../../images/Keyboards/Redragon K585 DITI One-Handed RGB Mechanical Gaming Keyboard, Blue Switches.jpg">
				<img src="../../images/Keyboards/Redragon K585 DITI One-Handed RGB Mechanical Gaming Keyboard, Blue Switches.jpg">
			</a>
			</div>
			<div class="section">
				<p>
				Product Id: GMC100
			</p>
			<p>
				Product Name:Redragon K585 DITI One-Handed RGB Mechanical Gaming Keyboard, Blue Switches
			<p>
				Price: 4,000 Tk
			</p>
			<p>
				Brand: Redragon.
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
				<td>Redragon</td>
			</tr>
			<tr>
				<td>Wrist-rest Part</td>
				<td>YES</td>
			</tr>
			<tr>
				<td>Type</td>
				<td>Mechanical</td>
			</tr>
			<tr>
				<td>Key Switches</td>
				<td>OUTEMU Blue Switches</td>
			</tr>
			<tr>
				<td>USB Connector	</td>
				<td>USB 2.0</td>
			</tr>
			<tr>
				<td>Dimension</td>
				<td> 11 x 9 x 2 inches
			</tr>
			<tr>
				<td>Weight</td>
				<td>1.7 lbs</td>
			</tr>
			<tr>
				<td>Keyboard Connectivity	</td>
				<td>Wired</td>
			</tr>
			<tr>
				<td>Matrix</td>
				<td>42 Keys (Full Rollover)</td>
			</tr>
			<tr>
				<td>Macro Key</td>
				<td>7 keys</td>
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