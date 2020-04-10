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
	<title>GAMING MOUSE</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../Css/mouse.css">
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
      				<a href="ps4games.php">PlayStation</an</a>
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
				<p>Mouse Available Now</p>
			</div>
			<div class="product">
					<a href="#"><img src="../images/Mouse/razer-viper-ultimate-12600.jpg" height="260px"></a>
					<div class="info">
						<p>
							<a href="#playstation4">
							razer-viper-ultimate
							</a>
						</p>
						<p>
							Price:Tk.12600
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
				</div>
		</div>
		<br><br><br>
		<div class="productList">
				<div class="product">
					<a href="#"><img src="../images/Mouse/Razer Naga Trinity-8415.jpg" height="260px"></a>
					<div class="info">
							<div class="proName">
								<p>
									<a href="#playstation4">
									Razer Naga Trinity
									</a>
								</p>
							</div>	
						<p>
							Price:Tk.8415
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
				<div class="product">
					<a href="#"><img src="../images/Mouse/Razer Deathadder Elite 5865.jpg"  height="260px"></a>
					<div class="info">
						<div class="proName">
							<p>
								<a href="#playstation4">
								Razer Deathadder Elite
								</a>
							</p>
						</div>
						<p>
							Price:Tk.5865
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
			<div class="product">
				<a href="#"><img src="../images/Mouse/logitech-g502-12650.jpg"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="#playstation4">
							logitech-g502
							</a>
							</p>
					</div>
					<p>
						Price:Tk.12600
						<button type="button" onclick="alert('Works')">Add to Cart</button>
					</p>

				</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
			<div class="product">
				<a href="#"><img src="../images/Mouse/Logitech G203 Prodigy 3315.jpg"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="#playstation4">
							Logitech G203 Prodigy
							</a>
							</p>
					</div>
					<p>
						Price:Tk.3300
						<button type="button" onclick="alert('Works')">Add to Cart</button>
					</p>

				</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
			<div class="product">
				<a href="#"><img src="../images/Mouse/Corsair Ironclaw RGB 4900.JPG"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="#playstation4">
							Corsair Ironclaw RGB
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

		<div class="footer">
			<p> Powered By Group-1</p>
		</div>

	</div>
	
</body>
</html>