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
	<title>PlayStation Controllers</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../Css/ControllerProduct.css">
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
		<br><br><br><br>
		<div class="productList">
			<div class="caption">
				<p>PS4 Controllers Available Now</p>
			</div>
			<div class="product">
					<a href="Controllers/DS4Black.php"><img src="../images/Controllers/DS4Black.jpg" height="260px"></a>
					<div class="info">
						<p>
							<a href="Controllers/DS4Black.php">
							DualShock 4 Black
							</a>
						</p>
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
					<a href="Controllers/ds4gold.php"><img src="../images/Controllers/DS4Gold.jpg" height="260px"></a>
					<div class="info">
							<div class="proName">
								<p>
									<a href="Controllers/ds4gold.php">
									DualShock4 Gold
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
					<a href="Controllers/ds4GreenCamo.php"><img src="../images/Controllers/DS4GreenCamo.jpg"  height="260px"></a>
					<div class="info">
						<div class="proName">
							<p>
								<a href="Controllers/ds4GreenCamo.php">
								DualShock4 Green Camoflauge
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
				<a href="Controllers/ds4red.php"><img src="../images/Controllers/DS4MagmaRed.png"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Controllers/ds4red.php">
							DualShock4 Magma Red
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
				<a href="Controllers/DS4Blue.php"><img src="../images/Controllers/DS4MidBlue.jpg"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Controllers/DS4Blue.php">
							DualShock4 Midnight Blue
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
				<a href="Controllers/ds4RedCamo.php"><img src="../images/Controllers/DS4RedCamo.png"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Controllers/ds4RedCamo.php">
							DualShock4 Red Camoflauge
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
				<a href="Controllers/ds4purple.php"><img src="../images/Controllers/DS4Purple.png" height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Controllers/ds4purple.php">
							DualShock4 Purple
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
				<a href="Controllers/ds4rosegold.php"><img src="../images/Controllers/DS4RoseGold.png"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Controllers/ds4rosegold.php">
							DualShock4 Rose Gold
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
				<a href="Controllers/ds4metal.php"><img src="../images/Controllers/DS4SteelBlack.png"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Controllers/ds4metal.php">
							DualShock4 Steel Black
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
				<a href="Controllers/ds4titanium.php"><img src="../images/Controllers/DS4TitanBlue.png"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Controllers/ds4titanium.php">
							DualShock4 Titanium Blue
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
				<a href="Controllers/ds4white.php"><img src="../images/Controllers/DS4White.jpg"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Controllers/ds4white.php">
							DualShock4 Glacier White
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
		
		<br><br>

		<div class="footer">
			<p> Powered By Group-1</p>
		</div>

	</div>
	
</body>
</html>