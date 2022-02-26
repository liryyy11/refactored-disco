
<!-- <?php

// session_start();
 

// if(isset($_SESSION["login"]) && $_SESSION["login"] === true){
//     header("location: welcome.php");
// }
 

// $username = $password = "";
// $username_err = $password_err = $login_err = "";
 

// if($_SERVER["REQUEST_METHOD"] == "POST"){
 
//     if(empty(trim($_POST["username"]))){
//         $username_err = "Please enter username.";
//     } else{
//         $username = trim($_POST["username"]);
//     }
    
   
//     if(empty(trim($_POST["password"]))){
//         $password_err = "Please enter your password.";
//     } else{
//         $password = trim($_POST["password"]);
//     }
    
//     if(empty($username_err) && empty($password_err)){
      
//         $sql = "SELECT id, username, password FROM registration WHERE username = ?";
        
//         if($stmt = mysqli_prepare($link, $sql)){
            
//             mysqli_stmt_bind_param($stmt, "s", $param_username);
           
//             $param_username = $username;
            
//             if(mysqli_stmt_execute($stmt)){
              
//                 mysqli_stmt_store_result($stmt);
                
//                 if(mysqli_stmt_num_rows($stmt) == 1){                    
                   
//                     mysqli_stmt_bind_result($stmt, $username, $hashed_password);
//                     if(mysqli_stmt_fetch($stmt)){
//                         if(password_verify($password, $hashed_password)){
                           
//                             session_start();
                            
                           
//                             $_SESSION["login"] = true;
//                             $_SESSION["username"] = $username;                            
                            
                           
//                             header("location: welcome.php");
//                         } else{
                            
//                             $login_err = "Invalid username or password.";
//                         }
//                     }
//                 } else{
                   
//                     $login_err = "Invalid username or password.";
//                 }
//             } else{
//                 echo "Oops! Something went wrong. Please try again later.";
//             }

//             mysqli_stmt_close($stmt);
//         }
//     }
    

//     mysqli_close($link);
// }
?> -->
 
<!DOCTYPE html>
<html lang="en">
    <head> 
        <title>The Medium </title>
        <link rel="icon" type="image/x-icon" href="css/images/icon.png">
        <link rel="stylesheet" href="css/home.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Advent+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Condensed:wght@100&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="main">
            <div class="navbar">
                <div class="logo">
                    <h2 class="icon">Project by Liry</h2>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about.html">About</a></li>
                    </ul>
                </div>
            </div>
            <div class="content">
                <h1> The Medium <br></h1>
                <h3>Channel your Words</h3>
                <p><br><br></p>
                <p><span>Don't have an account?<br></span></p>
                <button class="cn"><a href="create.php">create account </a></button>

                <div class="form">
                    <h2>Log in Here</h2><br>
                    <input type="username" name="Username" placeholder="Enter Username">
                    <input type="password" name="" placeholder="Enter Password">
                    <div class="button">
                        <button type="submit" name="login" >Log In</button>
                    </div>
                    
</div>
                </div>
            </div>
        </div>
    </body>
</html>
