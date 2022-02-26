<?php
session_start();
$conn = mysqli_connect("localhost", "root", "","journal");


if(isset($_POST["submit"])){
    // print"<pre>";
    // print_r($_POST);
    // print"</pre>";
    // exit();

    $firstname =$_SESSION["Firstname"]= $_POST["Firstname"];
    $lastname = $_POST["Lastname"];
    $email = $_POST["Email"];
    $username = $_POST["Username"];
    $password = $_POST["Password"];


//$sql = "INSERT INTO `registration` (`Id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES (null, '$firstname', '$lastname', '$email', '$username', `$password`)";
$sql= "INSERT INTO registration VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";

$rs = mysqli_query($conn, $sql);

    if($rs){
        
	    echo "Registered Successfully";
        header('location:home.php');
        
    }
    else{
        die("ERROR: Could not connect. " . mysqli_connect_error());
        header('location:home.php');
    }
}
?>