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
	<title>GAMING KEYBOARD</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../Css/Keyboard.css">
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
			<a href="logout.php">Logout</a>	a>	
		</div>
		<br><br><br><br>
		<div class="productList">
			<div class="caption">
				<p>Keyboards Available Now</p>
			</div>
			<div class="product">
					<a href="Keyboards/CorsairK95.php"><img src="../images/Keyboards/corsairk95.PNG" height="260px"></a>
					<div class="info">
						<p>
							<a href="Keyboards/CorsairK95.php">
							Corsair K95 RGB Platinum Mechanica
							</a>
						</p>
						<p>
							Price:Tk.16700
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
				</div>
		</div>
		<br><br><br>
		<div class="productList">
				<div class="product">
					<a href="Keyboards/SteelSeriesApex.php"><img src="../images/Keyboards/APEX.jpg" height="260px"></a>
					<div class="info">
							<div class="proName">
								<p>
									<a href="Keyboards/SteelSeriesApex.php">
									SteelSeries APEX 7
									</a>
								</p>
							</div>	
						<p>
							Price:Tk.19900
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
				<div class="product">
					<a href="Keyboards/CorsairStrafe.php"><img src="../images/Keyboards/Corsair-S.jpg"  height="260px"></a>
					<div class="info">
						<div class="proName">
							<p>
								<a href="Keyboards/CorsairStrafe.php">
								Corsair Strafe RGB Mechanical
								</a>
							</p>
						</div>
						<p>
							Price:Tk.14000
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
			<div class="product">
				<a href="Keyboards/RazerCynosa.php"><img src="../images/Keyboards/razerCC.jpg"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Keyboards/RazerCynosa.php">
							Razer Cynosa Chroma RGB Membrane Gaming Keyboard
							</a>
							</p>
					</div>
					<p>
						Price:Tk.4900
						<button type="button" onclick="alert('Works')">Add to Cart</button>
					</p>

				</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
			<div class="product">
				<a href="Keyboards/RazerHuntsman.php"><img src="../images/Keyboards/razerH.jpg"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Keyboards/RazerHuntsman.php">
							Razer Huntsman Opto-Mechanical Switch Keyboard
							</a>
							</p>
					</div>
					<p>
						Price:Tk.11800
						<button type="button" onclick="alert('Works')">Add to Cart</button>
					</p>

				</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
			<div class="product">
				<a href="Keyboards/RazerOrnata.php"><img src="../images/Keyboards/razerO.png"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Keyboards/RazerOrnata.php">
							Razer Ornata Chroma Multi Color Membrane Gaming Keyboard
							</a>
							</p>
					</div>
					<p>
						Price:Tk.7900
						<button type="button" onclick="alert('Works')">Add to Cart</button>
					</p>

				</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
			<div class="product">
				<a href="Keyboards/RapooV805.php"><img src="../images/Keyboards/rapoo-vpro-v805 5000.png" height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Keyboards/RapooV805.php">
							Rapoo VPRO V805 Cherry MX Wired Black Backlit Mechanical Gaming Keyboard
							</a>
							</p>
					</div>
					<p>
						Price:5,000 Tk
						<button type="button" onclick="alert('Works')">Add to Cart</button>
					</p>

				</div>
			</div>
		</div>
		<br><br><br>
		
		<div class="productList">
			<div class="product">
				<a href="Keyboards/LogitechG613.php"><img src="../images/Keyboards/logitechg613.jpeg"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Keyboards/LogitechG613.php">
							Logitech-g613
							</a>
							</p>
					</div>
					<p>
						Price:5,500 Tk
						<button type="button" onclick="alert('Works')">Add to Cart</button>
					</p>

				</div>
			</div>
		</div>
		<br><br><br>

		<div class="productList">
			<div class="product">
				<a href="Keyboards/RedDragon.php"><img src="../images/Keyboards/Redragon K585 DITI One-Handed RGB Mechanical Gaming Keyboard, Blue Switches.jpg"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Keyboards/RedDragon.php">
							Redragon K585 DITI One-Handed RGB Mechanical Gaming Keyboard, Blue Switches
							</a>
							</p>
					</div>
					<p>
						Price:4,000 Tk
						<button type="button" onclick="alert('Works')">Add to Cart</button>
					</p>

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