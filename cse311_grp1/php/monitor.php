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
	<title>MONITORS</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../Css/monitor.css">
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
				<p>Monitor Available Now</p>
			</div>
			<div class="product">
					<a href="Monitors/SamsungMonitor.php"><img src="../images/Monitors/32 CHG70 Gaming Monitor with Quantum Dot 42000.jpg" height="260px"></a>
					<div class="info">
						<p>
							<a href="Monitors/SamsungMonitor.php">
							Samsung 32 CHG70 Gaming Monitor
							</a>
						</p>
						<p>
							Price:Tk.42000
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
				</div>
		</div>
		<br><br><br>
		<div class="productList">
				<div class="product">
					<a href="Monitors/Samsung27.php"><img src="../images/Monitors/27 SR75 WQHD LED Space Monitor 23000.jpg" height="260px"></a>
					<div class="info">
							<div class="proName">
								<p>
									<a href="Monitors/Samsung27.php">
									Samsung 27 SR75 WQHD LED Space Monitor
									</a>
								</p>
							</div>	
						<p>
							Price:Tk.23000
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
				<div class="product">
					<a href="Monitors/HPMonitor1.php"><img src="../images/Monitors/HP Z27 27-inch 4K UHD Display 45800.jpg"  height="260px"></a>
					<div class="info">
						<div class="proName">
							<p>
								<a href="Monitors/HPMonitor1.php">
								HP Z27 27-inch 4K UHD Display
								</a>
							</p>
						</div>
						<p>
							Price:Tk.45000
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
			<div class="product">
				<a href="Monitors/HPMonitor2.php"><img src="../images/Monitors/HP P244 23.8-inch Monitor 12600.jpg"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Monitors/HPMonitor2.php">
							HP P244 23.8-inch Monitor
							</a>
							</p>
					</div>
					<p>
						Price:Tk.12500
						<button type="button" onclick="alert('Works')">Add to Cart</button>
					</p>

				</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
			<div class="product">
				<a href="Monitors/HPMonitor3.php"><img src="../images/Monitors/HP EliteDisplay E243 23.8-inch Monitor 15215.jpg"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Monitors/HPMonitor3.php">
								HP EliteDisplay E243 23.8-inch Monitor
							</a>
							</p>
					</div>
					<p>
						Price:Tk.15800
						<button type="button" onclick="alert('Works')">Add to Cart</button>
					</p>

				</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
			<div class="product">
				<a href="Monitors/AlienwareMonitor.php"><img src="../images/Monitors/Alien ware 55 inch 258315.jpg"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Monitors/AlienwareMonitor.php">
							Alienware 55 inch OLED Monitor
							</a>
							</p>
					</div>
					<p>
						Price:Tk.2,58,315
						<button type="button" onclick="alert('Works')">Add to Cart</button>
					</p>

				</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
			<div class="product">
				<a href="Monitors/DellMonitor.php"><img src="../images/Monitors/dell monitor 22 inch 17000.jpg" height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Monitors/DellMonitor.php">
							Dell monitor 22 inch
							</a>
							</p>
					</div>
					<p>
						Price: Tk.17,000
						<button type="button" onclick="alert('Works')">Add to Cart</button>
					</p>

				</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
			<div class="product">
				<a href="Monitors/DellMonitor2.php"><img src="../images/Monitors/Dell monitor 20 inch 13000 .jpg"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Monitors/DellMonitor2.php">
							Dell monitor 20 inch
							</a>
							</p>
					</div>
					<p>
						Price:13,000 Tk
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