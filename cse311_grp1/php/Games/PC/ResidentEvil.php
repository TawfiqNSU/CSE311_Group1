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
	<title>Resident Evil 2 PC</title>
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
				<a href="../../../images/Games/resident.jpeg">
				<img src="../../../images/Games/resident.jpeg">
			</a>
			</div>
			<div class="section">
				<p>
				Product Id: GMC100
			</p>
			<p>
				Product Name: Resident Evil 2 Remake
			<p>
				Price: 1,650Tk
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
				The genre-defining masterpiece Resident Evil 2 returns, completely rebuilt from the ground up for a deeper narrative experience. Using Capcom’s proprietary RE Engine, Resident Evil 2 offers a fresh take on the classic survival horror saga with breathtakingly realistic visuals, heart-pounding immersive audio, a new over-the-shoulder camera, and modernized controls on top of gameplay modes from the original game.
				<br><br>
				In Resident Evil 2, the classic action, tense exploration, and puzzle solving gameplay that defined the Resident Evil series returns. Players join rookie police officer Leon Kennedy and college student Claire Redfield, who are thrust together by a disastrous outbreak in Raccoon City that transformed its population into deadly zombies. Both Leon and Claire have their own separate playable campaigns, allowing players to see the story from both characters’ perspectives. The fate of these two fan favorite characters is in players hands as they work together to survive and get to the bottom of what is behind the terrifying attack on the city. Will they make it out alive?
				<br><br>
				A spine-chilling reimagining of a horror classic - Based on the original release in 1998, the new game has been completely rebuilt from the ground up for a deeper narrative experience.
				<br><br>
				A whole new perspective – New over-the-shoulder camera mode and modernized control scheme creates a more modern take on the survival horror experience and offers players a trip down memory lane with the original gameplay modes from the 1998 release.
				<br><br>
				Step into the rookie shoes of both heroes - Enjoy separately playable campaigns for both Leon and Claire, allowing players to see the story from both characters’ perspective.
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