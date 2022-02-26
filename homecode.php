<?php

session_start();
 

if(isset($_SESSION["login"]) && $_SESSION["login"] === true){
    header("location: welcome.php");
}
 

$username = $password = "";
$username_err = $password_err = $login_err = "";
 

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
      
        $sql = "SELECT id, username, password FROM registration WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_username);
           
            $param_username = $username;
            
            if(mysqli_stmt_execute($stmt)){
              
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                   
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                           
                            session_start();
                            
                           
                            $_SESSION["login"] = true;
                            $_SESSION["username"] = $username;                            
                            
                           
                            header("location: welcome.php");
                        } else{
                            
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                   
                    $login_err = "Invalid username or password.";
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
 