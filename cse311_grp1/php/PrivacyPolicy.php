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
	<title>GameCity Privacy Policy</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../Css/PrivacyPolicy.css">
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
		<div class="Policy">
			<p>
				<h2>What personal information will Game City collect from the customer?</h2>
			</p>

			<div class="paraBody">
				<p><ul type="bullet">
					<li>Information that you will give us during the creation of your account and during purhase. If you don't provide us with the information that we'll need then you won't be able to take advantage of our service.</li>
					<br>
					<li>Automatic information will be collected based on how you interact with our site.  Like many websites, we use "cookies" and other unique identifiers, and we obtain certain types of information when your web browser or device accesses services and other content served by or on behalf of Game City on other websites.</li>
					<br>
					<li>Information from other sources will be collected for the delivery address information from our carriers which we'll keep in our records so that we can deliver your next purchase easily.</li>
				</ul>
				</p>	
			</div>
			<br>
			<p>
				<h2>For what purpose does Game City take your personal information?</h2>
			</p>
			<div class="paraBody">
				<p><ul type="bullet">
					<li>For purchase and delivery of the products that you'll buy from out site.</li>
					<br>
					<li>For improving our site we'll use your information to provide functionality, analyze performance, fix errors andimprove stability.</li>
					<br>
					<li>For recommendation and personalization we use your imformation to provide you with the products that you'll be interested in.</li>
					<li>For legal obligation we take your personal infromation to comply with laws. For instance, we collect from sellers information regarding place of establishment and bank account information for identity verification and other purposes.</li>
					<br>
					<li>For displaying interest based ads for features, product and services.</li>
					<br>
					<li>For prevention and detection of fraud and abuse we use your personal information to protect security of our customers and Game City.</li>
				</ul>
				</p>
			</div>
			<br>
			<p>
				<h2>How secure is the information provided by you?</h2>
			</p>
			<div class="paraBody">
				<p><ul type="bullet">
					<li>We work to protect the security of your personal information during transmission by using encryption protocols and software.</li>
					<br>
					<li>We follow the Payment Card Industry Data Security Standard (PCI DSS) when handling credit card data.</li>
					<br>
					<li>We maintain physical, electronic, and procedural safeguards in connection with the collection, storage, and disclosure of personal customer information. Our security procedures mean that we may occasionally request proof of identity before we disclose personal information to you.</li>
					<br>
					<li>Our devices offer security features to protect them against unauthorized access and loss of data. You can control these features and configure them based on your needs.</li>
					
				</ul>
				</p>
			</div>
			<br>
			<p>
				<h2>What information you can access?</h2>
			</p>
			<div class="paraBody">
				<p><ul type="bullet">
					<li>You can access your personal information for example- your name, address,profile information, transaction method. You may also change these informations if you like.</li>
					<br>
					<li>You can access your previously placed orders and past transactions.</li>
					<br>
					<li>You can track your order and check its status whether its confirmed or not and information like the delivery date.</li>
					<br>
					<li>You can check the review given by any user on any product.</li>		
				</ul>
				</p>
			</div>

		</div>


		<br><br>
		<div class="footer">
			<p> Powered By Group-1</p>
		</div>
	</div>

</body>
</html>