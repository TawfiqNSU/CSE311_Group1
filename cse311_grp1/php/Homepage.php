<?php

session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: LoginPage.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Game City</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../Css/Homepage.css">
</head>
<body>
	<div class="mainBody">	
		<div class="header">
			<div class="logo">
			<a href="Homepage.php">
				<img src="../images/Logo.png" align="left" width="107px" height="95px">
			</a>
			</div>
			<div class="navbar">
			<a href="Homepage.php">Home</a>
  			<div class="dropdown">
    			<button class="dropbtn">Products
      				<i class="fa fa-caret-down"></i>
    			</button>
    			<div class="dropdown-content">
      				<a href="PSProductPage.php">PlayStation</a>
      				<a href="XboxProductPage.php">Xbox</a>
      				<a href="KeyBoardPage.php">Gaming Keyboards</a>
      				<a href="monitor.php">Monitors</a>
      				<a href="MousePage.php">Gaming Mice</a>
      				<a href="ControllerPage.php">PS4 Controllers</a>
    			</div>
  			</div>
  			<a href="PSProductPage.php">PlayStation</a>
  			<a href="XboxProductPage.php">Xbox</a>
  			<div class="dropdown">
    			<button class="dropbtn">Games 
      				<i class="fa fa-caret-down"></i>
    			</button>
    			<div class="dropdown-content">
      				<a href="pcgames.php">PC</a>
      				<a href="xboxgames.php">Xbox</a>
      				<a href="ps4games.php">PlayStation</a>
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
		<br>
		<div class="body2">
			<h2>
				Popular Games Right Now
			</h2>
			<div class="covers">
				<a href="#">
					<img src="../images/Games/DoomEternal.jpg">
				</a>
				<div class="info">
					<p>
						<a href="#playstation4">
						Doom Eternal
						</a>
					</p>
					<p>
						Price:5,000 Tk
						<button type="button" onclick="alert('Works')">Add to Cart</button>
					</p>

				</div>
			</div>
			<div class="covers">
				<a href="#">
					<img src="../images/Games/GTAV.jpeg">
				</a>
				<div class="info">
					<p>
						<a href="#playstation4">
						Grand Theft Auto V
						</a>
					</p>
					<p>
						Price:2,460 Tk
						<button type="button" onclick="alert('Works')">Add to Cart</button>
					</p>

				</div>
			</div>
			<div class="covers">
				<a href="#">
					<img src="../images/Games/RDR2.jpg">
				</a>
				<div class="info">
					<p>
						<a href="#playstation4">
						Red Dead Redemption 2
						</a>
					</p>
					<p>
						Price:3,740 Tk
						<button type="button" onclick="alert('Works')">Add to Cart</button>
					</p>

				</div>
			</div>
		</div>
		<br><br><br><br>
			<div class="body3">
				<h2>
					Top Selling Consoles
				</h2>
				<div class="covers">
					<a href="#">
						<img src="../images/Playstation/PS4PRO.jpg">
					</a>
					<div class="info">
						<p>
							<a href="#playstation4">
							PlayStation 4 Pro
							</a>
						</p>
						<p>
							Price:33,915 Tk
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
				</div>
				<div class="covers">
					<a href="#">
						<img src="../images/Xbox/Xbox1s.jpg">
					</a>
					<div class="info">
						<p>
							<a href="#playstation4">
							Xbox One S
							</a>
						</p>
						<p>
							Price:25,415 Tk
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
				</div>
				<div class="covers">
					<a href="#">
						<img src="../images/Playstation/PS4Slim.jpg">
					</a>
					<div class="info">
						<p>
							<a href="#playstation4">
							PlayStation 4 Slim
							</a>
						</p>
						<p>
							Price:25,415 Tk
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>
					</div>
				</div>
			</div>	
			<br><br><br><br>
			<div class="body3">
				<h2>
					Latest Monitors Available
				</h2>
				<div class="covers">
					<a href="#">
						<img src="../images/Monitors/HPZ27.jpg">
					</a>
					<div class="info">
						<p>
							<a href="#playstation4">
							HP Z27 27Inch 4k Monitor
							</a>
						</p>
						<p>
							Price:45,815 Tk 
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
				</div>
				<div class="covers">
					<a href="#">
						<img src="../images/Monitors/Alienware55.jpg">
					</a>
					<div class="info">
						<p>
							<a href="#playstation4">
							Alienware 55 inch OLED Monitor
							</a>
						</p>
						<p>
							Price:2,58,315 Tk 
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
				</div>
				<div class="covers">
					<a href="#">
						<img src="../images/Monitors/	SamsC27.jpg">
					</a>
					<div class="info">
						<p>
							<a href="#playstation4">
							Samsung CHG70 32 Inch Monitor
							</a>
						</p>
						<p>
							Price:25,415 Tk 
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>
					</div>
				</div>
			</div>
			<br><br><br><br>
			<div class="body3">
				<h2>
					PS4 Controller Skins
				</h2>
				<div class="covers">
					<a href="#">
						<img src="../images/Controllers/DS4purple.png">
					</a>
					<div class="info">
						<p>
							<a href="#playstation4">
							DualShock4 Electric Purple
							</a>
						</p>
						<p>
							Price:5,000 Tk 
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
				</div>
				<div class="covers">
					<a href="#">
						<img src="../images/Controllers/DS4RedCamo.png">
					</a>
					<div class="info">
						<p>
							<a href="#playstation4">
							DualShock4 Red Camoflauge
							</a>
						</p>
						<p>
							Price:5,000 Tk 
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
				</div>
				<div class="covers">
					<a href="#">
						<img src="../images/Controllers/DS4RoseGold.png">
					</a>
					<div class="info">
						<p>
							<a href="#playstation4">
							DualShock4 Rose Gold
							</a>
						</p>
						<p>
							Price:5,000 Tk 
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>
					</div>
				</div>
			</div>
	</div>

		<br><br>
		<div class="footer">
			<p> Powered By Group-1</p>
		</div>

	</div>
	
</body>
</html>