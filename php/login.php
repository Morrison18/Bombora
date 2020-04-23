<?php
session_start();

$servername = "localhost";
$uname = "brian";
$pass= "tested";
$dbname = "Clients";

// Create connection
$con = mysqli_connect($servername, $uname, $pass, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


mysqli_select_db($con, 'Clients');

$username = $_POST['username'];
$password= $_POST['password'];

$s= "select * from members where username = '$username' && password ='$password'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){
	$_SESSION['username']= $username;
	header('location:welc.php');
}else{
	header('location:../login.html#id01');
   
}

?>