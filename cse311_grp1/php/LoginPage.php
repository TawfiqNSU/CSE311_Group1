<?php

session_start();
 

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: Homepage.php");
    exit;
}
 

require_once "config.php";


$username = $password = "";
$username_err = $password_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
 
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
 
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    if(empty($username_err) && empty($password_err)){
    
        $sql = "SELECT id, username, password FROM login WHERE username = ?";
         
        if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
           
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
              /* store result */
                mysqli_stmt_store_result($stmt);
                
                
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                   
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            
                            session_start();
                            
                            
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                           
                            header("location: Homepage.php");
                        } else{
                       
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                  
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

          
            mysqli_stmt_close($stmt);
        }
    }
    

    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in to your Account</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../Css/style.css">
</head>
<body bgcolor="#393939">
    <div class="mainBody">
        <div class="logo">
            <a href="../Html/Homepage.html">
            <img src="../images/Logo.png" align="left" width="8%" height="4.5%">
            </a>
        </div>
        <br><br><br><br>
        <div class="form">
            <p class="ident"><font face="arial" size="6">User Login</font></p>
            <br>
             <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label><br>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>"><br>
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <br>    
                 <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label><br>
                <input type="password" name="password" class="form-control"><br>
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <br>
                <input type="submit" value="Login" class="button">
                <br>
                <p class="signupmsg">
                    New Here? 
                    <a href="SignupPage.php"> Sign Up here</a> 
                    
                </p>
            </form>
        </div>
    </div>

</body>
</html>