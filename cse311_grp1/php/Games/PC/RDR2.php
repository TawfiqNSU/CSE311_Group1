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
	<title>Red Dead Redemption 2 PC</title>
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
				<a href="../../../images/Games/reddead.jpg">
				<img src="../../../images/Games/reddead.jpg">
			</a>
			</div>
			<div class="section">
				<p>
				Product Id: GMC100
			</p>
			<p>
				Product Name:Red Dead Redemption 2
			<p>
				Price: 3,740Tk
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
				America, 1899.
				<br><br>
				Arthur Morgan and the Van der Linde gang are outlaws on the run. With federal agents and the best bounty hunters in the nation massing on their heels, the gang must rob, steal and fight their way across the rugged heartland of America in order to survive. As deepening internal divisions threaten to tear the gang apart, Arthur must make a choice between his own ideals and loyalty to the gang who raised him.
				<br><br>
				Now featuring additional Story Mode content and a fully-featured Photo Mode, Red Dead Redemption 2 also includes free access to the shared living world of Red Dead Online, where players take on an array of roles to carve their own unique path on the frontier as they track wanted criminals as a Bounty Hunter, create a business as a Trader, unearth exotic treasures as a Collector or run an underground distillery as a Moonshiner and much more.
				<br><br>
				With all new graphical and technical enhancements for deeper immersion, Red Dead Redemption 2 for PC takes full advantage of the power of the PC to bring every corner of this massive, rich and detailed world to life including increased draw distances; higher quality global illumination and ambient occlusion for improved day and night lighting; improved reflections and deeper, higher resolution shadows at all distances; tessellated tree textures and improved grass and fur textures for added realism in every plant and animal.
				<br><br>
				Red Dead Redemption 2 for PC also offers HDR support, the ability to run high-end display setups with 4K resolution and beyond, multi-monitor configurations, widescreen configurations, faster frame rates and more.
			</div>
		</div>
		<div class="requirements">
			<h2>System Requirements:</h2>
			<div class="req1">
				<b>MINIMUM:</b><br>
				Requires a 64-bit processor and operating system<br>
				<b>OS:</b> Windows 7 - Service Pack 1 (6.1.7601)<br>
				<b>Processor:</b> Intel® Core™ i5-2500K / AMD FX-6300<br>
				<b>Memory:</b>  8 GB RAM<br>
				<b>Graphics:</b>  Nvidia GeForce GTX 770 2GB / AMD Radeon R9 280 3GB<br>
				<b>Network:</b> Broadband Internet connection<br>
				<b>Storage:</b> 150 GB available space<br>
				<b>Sound Card:</b> Direct X Compatible<br>
				<b>Additional Notes:</b> ( 1080p / 60 FPS / Low Quality Settings )
			</div>
			<div class="req2">
				
				<b>RECOMMENDED:</b><br>
				Requires a 64-bit processor and operating system<br>
				<b>OS:</b> 64-bit Windows 10<br>
				<b>Processor:</b> Intel® Core™ i7-4770K / AMD Ryzen 5 1500X<br>
				<b>Memory:</b> 8 GB RAM<br>
				<b>Graphics:</b>Nvidia GeForce GTX 1060 6GB / AMD Radeon RX 480 4GB<br>
				<b>Network:</b> Broadband Internet connection<br>
				<b>Storage:</b> 150 GB available space<br>
				<b>Sound Card:</b> Direct X Compatible<br>
				<b>Additional Notes:</b> ( 1080p / 60 FPS / High Quality Settings )
			</div>
		</div>

		<div class="footer">
			<p> Powered By Group-1</p>
		</div>
	</div>	

</body>
</html>