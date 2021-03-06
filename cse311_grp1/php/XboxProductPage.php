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
	<title>Xbox</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../Css/ps4games.css">
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
				<p>Xbox available now</p>
			</div>
			<div class="product">
					<a href="Consoles/Xbox/Xbox1x.php"><img src="../images/xbox/Xbox1x.png" height="260px"></a>
					<div class="info">
						<p>
							<a href="Consoles/Xbox/Xbox1x.php">
							Xbox One X
							</a>
						</p>
						<p>
							Price:26,000 Tk
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
				</div>
		</div>
		<br><br><br>
		<div class="productList">
				<div class="product">
					<a href="Consoles/Xbox/Xbox1xStarWars.php"><img src="../images/Xbox/XboxStarWars.jpg" height="260px"></a>
					<div class="info">
							<div class="proName">
								<p>
									<a href="Consoles/Xbox/Xbox1xStarWars.php">
									Xbox One X Star Wars Jedi Fallen Order Edition
									</a>
								</p>
							</div>	
						<p>
							Price:30,000 Tk
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
				<div class="product">
					<a href="Consoles/Xbox/Xbox1xGears5.php"><img src="../images/Xbox/XboxGears5.jpg"  height="260px"></a>
					<div class="info">
						<div class="proName">
							<p>
								<a href="Consoles/Xbox/Xbox1xGears5.php">
								Xbox One X Gears 5 Limited Edition
								</a>
							</p>
						</div>
						<p>
							Price:30,000 Tk
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
			<div class="product">
				<a href="Consoles/Xbox/Xbox1s.php"><img src="../images/Xbox/XboxOneS.jpg"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Consoles/Xbox/Xbox1s.php">
							Xbox One S
							</a>
							</p>
					</div>
					<p>
						Price:26,000 Tk
						<button type="button" onclick="alert('Works')">Add to Cart</button>
					</p>

				</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
			<div class="product">
				<a href="Consoles/Xbox/Xbox1sStarWars.php"><img src="../images/Xbox/Xbox1sStarWars.jpg"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Consoles/Xbox/Xbox1sStarWars.php">
							Xbox One S Star Wars: Jedi Fallen Order Edition
							</a>
							</p>
					</div>
					<p>
						Price:30,000 Tk
						<button type="button" onclick="alert('Works')">Add to Cart</button>
					</p>

				</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
			<div class="product">
				<a href="Consoles/Xbox/Xbox1sGears5.php"><img src="../images/Xbox/Xbox1sGears5.jpg"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="Consoles/Xbox/Xbox1sGears5.php">
							Xbox One S Gears 5 Edition
							</a>
							</p>
					</div>
					<p>
						Price:30,000 Tk
						<button type="button" onclick="alert('Works')">Add to Cart</button>
					</p>

				</div>
			</div>
		</div>
		

		<div class="footer">
			<p> Powered By Group-1</p>
		</div>

	</div>
	
</body>
</html>