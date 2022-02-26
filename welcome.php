<?php
session_start();
$conn = mysqli_connect("localhost", "root", "","journal");
if(isset($_SESSION["Firstname"])){
    $username=$_SESSION["Firstname"];
 
}
$sql="select * from registration ";
$result=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($result)>0){
  
    $firstname = $row["firstname"];
    $lastname = $row["lastname"];
    $email = $row["email"];
    $username = $row["username"];

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome to your blog</title>
        <link rel="stylesheet" type="text/css" href="css/welcome.css">
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
                    <h1 class="icon">Hi,<?php echo $firstname;?> <b><b></h1><br>
                </div>
            <div class="menu">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.html">About</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>