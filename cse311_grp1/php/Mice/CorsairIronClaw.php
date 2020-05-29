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
	<title>Corsair IronClaw </title>
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
				<a href="../../images/Mouse/Corsair Ironclaw RGB 4900.jpg">
				<img src="../../images/Mouse/Corsair Ironclaw RGB 4900.jpg">
			</a>
			</div>
			<div class="section">
				<p>
				Product Id: GMC105
			</p>
			<p>
				Product Name: Corsair IronClaw RGB Gaming Mouse
			</p>
			<p>
				Price: 4,900 Tk
			</p>
			<p>
				Brand: Corsair
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
				<td>Corsair</td>
			</tr>
			<tr>
				<td>Optical Sensor Resolution</td>
				<td>18,000 DPI</td>
			</tr>
			<tr>
				<td>Keys</td>
				<td>7 Programmable Buttons</td>
			</tr>
			<tr>
				<td>Cable Length</td>
				<td>1.8m Braided Fiber</td>
			</tr>
			<tr>
				<td>Weight</td>
				<td>105g (w/out cable and accessories)</td>
			</tr>
			<tr>
				<td>Dimension(LxWxH)</td>
				<td>124mm X 68mm X 43mm</td>
			</tr>
			<tr>
				<td>Mechanical Switches</td>
				<td>7 Omron Buttons.<br>
				50 Million Left and Right Click</td>
			</tr>
			<tr>
				<td>Color Option	</td>
				<td>Mouse Backlighting: 1 Zone RGB</td>
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