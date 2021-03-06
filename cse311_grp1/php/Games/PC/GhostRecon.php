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
	<title>Ghost Recon Breakpoint</title>
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
				<a href="../../../images/Games/ghost.jpg">
				<img src="../../../images/Games/ghost.jpg">
			</a>
			</div>
			<div class="section">
				<p>
				Product Id: GMC100
			</p>
			<p>
				Product Name:Doom Eternal
			<p>
				Price: 1,530Tk/ Month			
			</p>
			<p>
				Publisher: Ubisoft
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
				MILITARY SURVIVAL<br><br>
				Experience life as a Ghost, an elite US Special Operations soldier, as you fight back from behind enemy lines on the toughest mission of your career.<br><br>
				STEALTH<br><br>
				Use all your training and skills to infiltrate or evade your enemies as they hunt you without mercy.<br><br>
				CUSTOMIZE YOUR GHOST<br><br>
				Create a unique Ghost to look and play your way. With multiple classes and deep systems featuring thousands of options for both functional and cosmetic customization no two Ghosts will look and play the same. Weapons, gear, and equipment are craftable, customizable, and upgradeable using items and resources you’ll find across Auroa.
				A FULL FEATURED GAME<br><br>
				The world of Auroa can be explored either solo or along side friends with Ghost Recon’s best in class seamless jump in jump out co-op. There are no restrictions on when teammates can join you and all progression is maintained across the squad.<br><br>
				Take on the Wolves in the main story or explore Auroa together to complete the many diverse side activities the open world has to offer.<br><br>
			</div>
		</div>
		<div class="requirements">
			<h2>System Requirements:</h2>
			<div class="req1">
				<b>MINIMUM:</b><br>
				Requires a 64-bit processor and operating system<br>
				<b>OS:</b> 64-bit Windows 7 / 64-Bit Windows 10<br>
				<b>Processor:</b> AMD Ryzen 3 1200/Intel Core I5 4460<br>
				<b>Memory:</b> 8 GB RAM<br>
				<b>Graphics:</b>  AMD Radeon R9 280X/Nvidia Geforce GTX 960 (4 GB)<br>
				<b>Network:</b> Broadband Internet connection<br>
				<b>Storage:</b> 50 GB available space<br>
				<b>Additional Notes:</b> ( 1080p / 60 FPS / Low Quality Settings )
			</div>
			<div class="req2">
				
				<b>RECOMMENDED:</b><br>
				Requires a 64-bit processor and operating system<br>
				<b>OS:</b> 64-bit Windows 10<br>
				<b>Processor:</b> AMD Ryzen 5 1600/Intel Core I7 6700K<br>
				<b>Memory:</b> 8 GB RAM<br>
				<b>Graphics:</b>AMD Radeon RX 480/Nvidia Geforce GTX 1060 (6 GB)<br>
				<b>Network:</b> Broadband Internet connection<br>
				<b>Storage:</b> 50 GB available space<br>
				<b>Additional Notes:</b> ( 1080p / 60 FPS / High Quality Settings )
			</div>
		</div>

		<div class="footer">
			<p> Powered By Group-1</p>
		</div>
	</div>	

</body>
</html>