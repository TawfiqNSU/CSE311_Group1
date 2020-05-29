<?php

require_once "config.php";

$username=$username_err="";
$password=$password_err="";
$confirm_password="";
$confirm_password_err="";
$full_name=$full_name_err="";
$email=$email_err="";


if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM login WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    if(empty(trim($_POST["password"]))){
    	$password_err="Please enter a password";
    }elseif(strlen(trim($_POST["password"])) < 6){
    	$password_err="Password must contain atleast 6 characters.";
    }else{
    	$password=trim($_POST["password"]);
    }



    	if(empty(trim($_POST["full_name"]))){
    		$full_name_err="Please enter your name.";
       	}
       	else{
       		$full_name=trim($_POST["full_name"]);
       	}

       	if (empty(trim($_POST["email"]))) {
       		$email_err="Please enter your email.";
       	}else{
       		$email=trim($_POST["email"]);
       	}

       	if(empty($username_err) && empty($password_err) && empty($full_name_err) && empty($email_err)){
       		$sql= "INSERT INTO login(username,password,full_name,email) VALUES (?,?,?,?)";
       	
       	if($stmt=mysqli_prepare($link, $sql)){
       		mysqli_stmt_bind_param($stmt,"ssss",$param_username,$param_password, $param_full_name,$param_email);

       		$param_username=$username;
       		$param_password = password_hash($password, PASSWORD_DEFAULT);
       		$param_full_name=$full_name;
       		$param_email=$email;

       		if(mysqli_stmt_execute($stmt)){
       			header("location:LoginPage.php");
       		}else{
       			echo "Unexpected Error Occured";
       		}
       		mysqli_stmt_close($stmt);
        }
      }

       	 mysqli_close($link);
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>GameCity SignUp</title>
  <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="../Css/SignUpStyle.css">
</head>
<body>
  <div class="mainBody">  
    <div class="header">
      <div class="logo">
      <a href="../Html/Homepage.html">
        <img src="../images/Logo.png" align="left" width="107px" height="95px">
      </a>
      </div>
      <div class="navbar">
      <a href="Homepage.html">Home</a>
        <div class="dropdown">
          <button class="dropbtn">Products
              <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
              <a href="PSProductPage.html">PlayStation</a>
              <a href="XboxProductPage.html">Xbox</a>
              <a href="KeyBoardPage.html">Gaming Keyboards</a>
              <a href="monitor.html">Monitors</a>
              <a href="MousePage.html">Gaming Mice</a>
              <a href="ControllerPage.html">PS4 Controllers</a>
          </div>
        </div>
        <a href="PSProductPage.html ">PlayStation</a>
        <a href="XboxProductPage.html">Xbox</a>
        <div class="dropdown">
          <button class="dropbtn">Games 
              <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
              <a href="pcgames.html">PC</a>
              <a href="xboxgames.html">Xbox</a>
              <a href="ps4games.html">PlayStation</a>
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
      <a href="LoginPage.php">Login</a>  
      <a href="SignupPage.php">SignUp</a>  
    </div>
  </div>
    <br><br><br><br>
    <div>
      <p class=title>
        <font size="8">
          Create an account
        </font> 
      </p>
    </div>
    <div class="form">
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label><br>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <br>    
        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label><br>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <br>
   
       <div class="form-group <?php echo (!empty($full_name_err)) ? 'has-error' : ''; ?>">
                <label>Full Name</label><br>
                <input type="full_name" name="full_name" class="form-control" value="<?php echo $full_name; ?>">
                <span class="help-block"><?php echo $full_name_err; ?></span>
            </div>
        <br>
          <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>E-mail</label><br>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>
        <br>
        <input type="checkbox" name="agreement" value="Agreed" class="checkbox">
        <label for="terms" class="termsMsg"> By checking this box,I agree to the GameCity<a href="../Html/PrivacyPolicy.html"> Privacy Policy.</label><br>
        <input type="submit" value="SignUp" class="button"><br>
        <label for="MemMsg" class="msg">
          Already have an account? 
          <a href="LoginPage.php">Click Here</a>
        </label>
      </form>

    </div>
    <div class="footer">
      <p> Powered By Group-1</p>
    </div>
  </div>

</body>
</html>
