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
	<title> Call of Duty Modern Warfare Remastered</title>
	<link rel="shortcut icon" type="image/x-icon" href="../../../images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../../../Css/Games/XBOX/Games.css">
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
		</div>			<br><br>
			<div class="section">
				<a href="../../../images/Games/cod.jpg">
				<img src="../../../images/Games/cod.jpg">
			</a>
			</div>
			<div class="section">
				<p>
				Product Id: GMC100
			</p>
			<p>
				Product Name: Call of Duty Modern Warfare Remastered
			<p>
				Price: 1,699 Tk
			</p>
			<p>
				Publisher: Activision
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
			A CLASSIC REMASTERED<br><br>
			One of the most critically-acclaimed games in history. Call of Duty®4: Modern Warfare®, is back, remastered in true high-definition, featuring enhanced textures, rendering, high-dynamic range lighting, and much more to bring a new generation experience to fans. Available on disc and digital download first on PS4. 
			<br><br>
			CAMPAIGN
			<br><br>
			Relive one of the most iconic campaigns of all time, that includes fan favorite missions such as "All Ghillied Up," "Charlie Don't Surf," and "Crew Expendable."
		</div>
	</div>	

		<div class="footer">
			<p> Powered By Group-1</p>
		</div>
	</div>	

</body>
</html>