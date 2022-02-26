
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>creating account</title>
        <link rel="stylesheet" type="text/css" href="css/create.css">
        <link rel="icon" type="image/x-icon" href="css/images/icon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique+B1&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Advent+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Condensed:wght@100&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="main">
            <div class="navbar">
                <div class="logo">
                    <h2 class="icon"><a href="home.php">The Medium</a> </h2>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about.html">About</a></li>
                    </ul>
                </div>
            </div>
            <div class="form">
                <h2>Create Account</h2><br>
                <form action="createcode.php" method="post">
                        <input type="firstname" name="Firstname" placeholder="Enter your Firstname"> 
                        <input type="lastname" name="Lastname" placeholder="Enter your Lastname">
                        <input type="email" name="Email" placeholder="Enter your Email ID">
                        <input type="username" name="Username" placeholder="Enter Username">
                        <input type="password" name="Password" placeholder="Enter Password">
                        <button type="submit" value="submit" name="submit">SUBMIT</button>
                </form>
            </div>
            <div class="info">
                <p> Already have an account?<a href="home.php">Login</a></p>
            </div>
        </div>
        
    </body>
</html>