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
	<title>GTA V PC</title>
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
				<a href="../../../images/Games/gtav.jpg">
				<img src="../../../images/Games/gtav.jpg">
			</a>
			</div>
			<div class="section">
				<p>
				Product Id: GMC100
			</p>
			<p>
				Product Name:GTA V
			<p>
				Price: 2,460Tk
			</p>
			<p>
				Publisher: Rockstar Games.
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
				When a young street hustler, a retired bank robber and a terrifying psychopath find themselves entangled with some of the most frightening and deranged elements of the criminal underworld, the U.S. government and the entertainment industry, they must pull off a series of dangerous heists to survive in a ruthless city in which they can trust nobody, least of all each other.<br><br>
				Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second.<br><br>
				The game offers players a huge range of PC-specific customization options, including over 25 separate configurable settings for texture quality, shaders, tessellation, anti-aliasing and more, as well as support and extensive customization for mouse and keyboard controls. Additional options include a population density slider to control car and pedestrian traffic, as well as dual and triple monitor support, 3D compatibility, and plug-and-play controller support.<br><br>Grand Theft Auto V for PC also includes Grand Theft Auto Online, with support for 30 players and two spectators. Grand Theft Auto Online for PC will include all existing gameplay upgrades and Rockstar-created content released since the launch of Grand Theft Auto Online, including Heists and Adversary modes.<br><br>
				The PC version of Grand Theft Auto V and Grand Theft Auto Online features First Person Mode, giving players the chance to explore the incredibly detailed world of Los Santos and Blaine County in an entirely new way.
			</div>
		</div>
		<div class="requirements">
			<h2>System Requirements:</h2>
			<div class="req1">
				<b>MINIMUM:</b><br>
				Requires a 64-bit processor and operating system<br>
				<b>OS:</b> Windows 10 64 Bit, Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1<br>
				<b>Processor:</b> Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom 9850 Quad-Core Processor (4 CPUs) @ 2.5GHz<br>
				<b>Memory:</b> 4 GB RAM<br>
				<b>Graphics:</b>  NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)<br>
				<b>Network:</b> Broadband Internet connection<br>
				<b>Storage:</b> 72 GB available space<br>
				<b>Sound Card:</b> 100% DirectX 10 compatible<br>
				<b>Additional Notes:</b> ( 1080p / 60 FPS / Low Quality Settings )
			</div>
			<div class="req2">
				
				<b>RECOMMENDED:</b><br>
				Requires a 64-bit processor and operating system<br>
				<b>OS:</b> 64-bit Windows 10<br>
				<b>Processor:</b> Intel Core i5 3470 @ 3.2GHz (4 CPUs) / AMD X8 FX-8350 @ 4GHz (8 CPUs)<br>
				<b>Memory:</b> 8 GB RAM<br>
				<b>Graphics:</b>NVIDIA GTX 660 2GB / AMD HD 7870 2GB<br>
				<b>Network:</b> Broadband Internet connection<br>
				<b>Storage:</b> 50 GB available space<br>
				<b>Sound Card:</b> 100% DirectX 10 compatible<br>
				<b>Additional Notes:</b> ( 1080p / 60 FPS / High Quality Settings )
			</div>
		</div>

		<div class="footer">
			<p> Powered By Group-1</p>
		</div>
	</div>	

</body>
</html>