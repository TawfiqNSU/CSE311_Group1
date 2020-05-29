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
	<title>Doom Eternal PC</title>
	<link rel="shortcut icon" type="image/x-icon" href="../../../images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../../../Css/Games/Games.css">
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
  				<a href="../../PSProductPage.php	">PlayStation</a>
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
				<a href="../../../images/Games/doom.jpg">
				<img src="../../../images/Games/doom.jpg">
			</a>
			</div>
			<div class="section">
				<p>
				Product Id: GMC100
			</p>
			<p>
				Product Name:Doom Eternal
			<p>
				Price: 5,015Tk
			</p>
			<p>
				Publisher: Bethesda Softworks
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
			<div class="details">
				Hell’s armies have invaded Earth. Become the Slayer in an epic single-player campaign to conquer demons across dimensions and stop the final destruction of humanity.<br><br>
				The Only Thing they Fear... Is You.</font><br><br>
				Experience the ultimate combination of speed and power in DOOM Eternal - the next leap in push-forward, first-person combat.<br><br>
				Slayer Threat Level At Maximum<br><br>
				Armed with a shoulder-mounted flamethrower, retractable wrist-mounted blade, upgraded guns and mods, and abilities, you're faster, stronger, and more versatile than ever.<br><br>
				Unholy Trinity<br><br>
				Take what you need from your enemies: Glory kill for extra health, incinerate for armor, and chainsaw demons to stock up on ammo to become the ultimate demon-slayer.<br><br>
				Enter Battlemode<br><br>
				A new 2 versus 1 multiplayer experience. A fully-armed DOOM Slayer faces off against two player-controlled demons, fighting it out in a best-of-five round match of intense first-person combat.
			</div>
		</div>
		<div class="requirements">
			<h2>System Requirements:</h2>
			<div class="req1">
				<b>MINIMUM:</b><br>
				Requires a 64-bit processor and operating system<br>
				<b>OS:</b> 64-bit Windows 7 / 64-Bit Windows 10<br>
				<b>Processor:</b> Intel Core i5 @ 3.3 GHz or better, or AMD Ryzen 3 @ 3.1 GHz or better<br>
				<b>Memory:</b> 8 GB RAM<br>
				<b>Graphics:</b> NVIDIA GeForce GTX 1050Ti (4GB), GTX 1060 (3GB), GTX 1650 (4GB) or AMD Radeon R9 280(3GB), AMD Radeon R9 290 (4GB), RX 470 (4GB)
				<b>Network:</b> Broadband Internet connection<br>
				<b>Storage:</b> 50 GB available space<br>
				<b>Additional Notes:</b> ( 1080p / 60 FPS / Low Quality Settings )
			</div>
			<div class="req2">
				
				<b>RECOMMENDED:</b><br>
				Requires a 64-bit processor and operating system<br>
				<b>OS:</b> 64-bit Windows 10<br>
				<b>Processor:</b> Intel Core i7-6700K or better, or AMD Ryzen 7 1800X or better<br>
				<b>Memory:</b> 8 GB RAM<br>
				<b>Graphics:</b> NVIDIA GeForce GTX 1060 (6GB), NVIDIA GeForce 970 (4GB), AMD RX 480 (8GB)<br>
				<b>Network:</b> Broadband Internet connection<br>
				<b>Storage:</b> 50 GB available space<br>
				<b>Additional Notes:</b> ( 1080p / 60 FPS / High Quality Settings ) - *On NVIDIA GTX 970 cards Texture Quality should be set to Medium
			</div>
		</div>

		<div class="footer">
			<p> Powered By Group-1</p>
		</div>
	</div>	

</body>
</html>