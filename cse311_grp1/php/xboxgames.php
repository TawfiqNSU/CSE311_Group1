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
	<title>Xbox Games</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../Css/xboxgames.css">
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
				<p>Xbox Games available now</p>
			</div>
			<div class="product">
					<a href="#"><img src="../images/Games/battle.jpg" height="260px"></a>
					<div class="info">
						<p>
							<a href="#playstation4">
							Battlefield 5
							</a>
						</p>
						<p>
							Price:3,500 Tk
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
				</div>
		</div>
		<br><br><br>
		<div class="productList">
				<div class="product">
					<a href="#"><img src="../images/Games/forza.jpg" height="260px"></a>
					<div class="info">
							<div class="proName">
								<p>
									<a href="#playstation4">
									Forza Horizon 4
									</a>
								</p>
							</div>	
						<p>
							Price:4,200 Tk
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
				<div class="product">
					<a href="#"><img src="../images/Games/gears.png"  height="260px"></a>
					<div class="info">
						<div class="proName">
							<p>
								<a href="#playstation4">
								Gears of War 4
								</a>
							</p>
						</div>
						<p>
							Price:3,500 Tk
							<button type="button" onclick="alert('Works')">Add to Cart</button>
						</p>

					</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
			<div class="product">
				<a href="#"><img src="../images/Games/hitman.jpg"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="#playstation4">
							Hitman 2
							</a>
							</p>
					</div>
					<p>
						Price:3,800 Tk
						<button type="button" onclick="alert('Works')">Add to Cart</button>
					</p>

				</div>
			</div>
		</div>
		<br><br><br>
		<div class="productList">
			<div class="product">
				<a href="#"><img src="../images/Games/red.jpg"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="#playstation4">
							Red Dead Redemption 2
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
		<br><br><br>
		<div class="productList">
			<div class="product">
				<a href="#"><img src="../images/Games/shadow.jpg"  height="260px"></a>
				<div class="info">
					<div class="proName">
						<p>
							<a href="#playstation4">
							Shadow of Tomb Raider
							</a>
							</p>
					</div>
					<p>
						Price:3,500 Tk
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