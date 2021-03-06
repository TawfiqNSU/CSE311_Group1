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
	<title>The Witcher 3</title>
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
			</div>
			<br><br>
			<div class="section">
				<a href="../../../images/Games/witcher.jpg">
				<img src="../../../images/Games/witcher.jpg">
			</a>
			</div>
			<div class="section">
				<p>
				Product Id: GMC100
			</p>
			<p>
				Product Name: The Witcher 3 Wild Hunt.
			<p>									
				Price: 1,990Tk
			</p>
			<p>
				Publisher: CapCom Co. Ltd.
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
				The Witcher: Wild Hunt is a story-driven open world RPG set in a visually stunning fantasy universe full of meaningful choices and impactful consequences. In The Witcher, you play as professional monster hunter Geralt of Rivia tasked with finding a child of prophecy in a vast open world rich with merchant cities, pirate islands, dangerous mountain passes, and forgotten caverns to explore.
				<br><br>
				Key Features<br><br>
				PLAY AS A HIGHLY TRAINED MONSTER SLAYER FOR HIRE<br><br>
				Trained from early childhood and mutated to gain superhuman skills, strength and reflexes, witchers are a counterbalance to the monster-infested world in which they live.
				<br><br>
				Gruesomely destroy foes as a professional monster hunter armed with a range of upgradeable weapons, mutating potions and combat magic.
				<br><br>
				Hunt down a wide range of exotic monsters — from savage beasts prowling the mountain passes, to cunning supernatural predators lurking in the shadows of densely populated towns.
				<br><br>
				Invest your rewards to upgrade your weaponry and buy custom armour, or spend them away in horse races, card games, fist fighting, and other pleasures the night brings.
			</div>
		</div>
		<div class="requirements">
			<h2>System Requirements:</h2>
			<div class="req1">
				<b>MINIMUM:</b><br>
				Requires a 64-bit processor and operating system<br>
				<b>OS:</b> WINDOWS® 7, 8.1, 10 (64-BIT Required)<br>
				<b>Processor:</b> Intel® Core™ i5-4460 or AMD FX™-6300 or better<br>
				<b>Memory:</b>  8 GB RAM<br>
				<b>Graphics:</b> NVIDIA® GeForce® GTX 760 or AMD Radeon™ R7 260x with 2GB Video RAM<br>
				<b>Network:</b> Broadband Internet connection<br>
				<b>Storage:</b> 26 GB available space<br>
				<b>Sound Card:</b>Direct X Version 11<br>
				<b>Additional Notes:</b> ( 1080p / 60 FPS / Low Quality Settings )
			</div>
			<div class="req2">
				
				<b>RECOMMENDED:</b><br>
				Requires a 64-bit processor and operating system<br>
				<b>OS:</b> WINDOWS® 7, 8.1, 10 (64-BIT Required)<br>
				<b>Processor:</b>  Intel® Core™ i7-3770 or AMD FX™-9590 or better<br>
				<b>Memory:</b> 8 GB RAM<br>
				<b>Graphics:</b>NVIDIA® GeForce® GTX 1060 or AMD Radeon™ RX 480 with 3GB VRAM<br>
				<b>Network:</b> Broadband Internet connection<br>
				<b>Storage:</b> 26 GB available space<br>
				<b>Sound Card:</b> Direct X 11 Compatible<br>
				<b>Additional Notes:</b> ( 1080p / 60 FPS / High Quality Settings )
			</div>
		</div>

		<div class="footer">
			<p> Powered By Group-1</p>
		</div>
	</div>	

</body>
</html>