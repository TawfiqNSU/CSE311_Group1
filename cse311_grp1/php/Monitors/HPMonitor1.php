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
	<title>HP Z27 27-inch 4K UHD Display</title>
	<link rel="shortcut icon" type="image/x-icon" href="../../images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../../Css/Monitor/Monitor.css">
</head>
<body>
	<div class="mainBody">	
		<div class="header">
			<div class="logo">
			<a href="../Homepage.php">
				<img src="../../images/Logo.png" align="left" width="107px" height="95px">
			</a>
			</div>
			<div class="navbar">
				<a href="../Homepage.php">Home</a>
  				<div class="dropdown">
    				<button class="dropbtn">Products
      					<i class="fa fa-caret-down"></i>
    				</button>
    				<div class="dropdown-content">
      					<a href="../PSProductPage.php">PlayStation</a>
      					<a href="../XboxProductPage.php">Xbox</a>
      					<a href="../KeyBoardPage.php">Gaming Keyboards</a>
      					<a href="../monitor.php">Monitors</a>
      					<a href="../MousePage.php">Gaming Mice</a>
      					<a href="../ControllerPage.php">PS4 Controllers</a>
    				</div>
  				</div>
  				<a href="../PSProductPage.php">PlayStation</a>
  				<a href="../XboxProductPage.php">Xbox</a>
  				<div class="dropdown">
    				<button class="dropbtn">Games 
      					<i class="fa fa-caret-down"></i>
    				</button>
    				<div class="dropdown-content">
      					<a href="../pcgames.php">PC</a>
      					<a href="../xboxgames.php">Xbox</a>
      					<a href="../ps4games.php">PlayStation</a>
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
				<a href="../../images/Monitors/HP Z27 27-inch 4K UHD Display 45800.jpg">
				<img src="../../images/Monitors/HP Z27 27-inch 4K UHD Display 45800.jpg">
			</a>
			</div>
			<div class="section">
				<p>
				Product Id: GMC100
			</p>
			<p>
				Product Name:HP Z27 27-inch 4K UHD Display 
			<p>
				Price: 74,500 Tk
			</p>
			<p>
				Brand: HP.
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
		<table bgcolor="#393939">
			<tr>
				<th colspan="2" >Specification</th>
			</tr>
			<tr>
				<td>Manufacturer</td>
				<td>HP</td>
			</tr>
			<tr>
				<td>Panel Type</td>
				<td>IPS with LED backlight</td>
			</tr>
			<tr>
				<td>Screen Size	</td>
				<td>68.58 cm (27")</td>
			</tr>
			<tr>
				<td>Resolution</td>
				<td>4K UHD (3840 x 2160 @ 60 Hz)</td>
			</tr>
			<tr>
				<td>Brightness	</td>
				<td>350 cd/m²</td>
			</tr>
			<tr>
				<td>Viewing Angle	</td>
				<td>178°(H)/178°(V)</td>
			</tr>
			<tr>
				<td>Contrast Ratio</td>
				<td>1300:1 static<br>
					5000000:1 dynamic</td>
			</tr>
			<tr>
				<td>Aspect Ratio</td>
				<td>16:9</td>
			</tr>
			<tr>
				<td>Color Support</td>
				<td>16.7M</td>
			</tr>
			<tr>
				<td>Refresh Rate</td>
				<td>Up to 60 Hz</td>
			</tr>
			<tr>
				<td>Dimension</td>
				<td>With stand (W x D x H): 61.41 X 23 X 51 cm<br>
					Without stand (W x D x H): 61.41 X 5.45 X 36.54 cm</td>
			</tr>
			<tr>
				<td>Weight	</td>
				<td>9.38 kg</td>
			</tr>
			<tr>
				<td>Warranty</td>
				<td>03 Years Warranty as per Terms and Condition</td>
			</tr>
		</table>
		</div>

		<div class="footer">
			<p> Powered By Group-1</p>
		</div>
	</div>	

</body>
</html>