<?php

session_start();
header('location:../login.html');

$servername = "localhost";
$user= "brian";
$pass = "tested";
$dbname = "Clients";

// Create connection
$con = mysqli_connect($servername, $user, $pass, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Escape user inputs for security



$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$s= "select * from members where username = '$username'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){
	echo" Username Already Taken";
}else{
    $passwordmd5 = md5($password);
	$reg= " insert into members(username,password,email) values ('$username', '$passwordmd5', '$email')";
	mysqli_query($con, $reg);
	
}

?>
<html>
    <body>
        <script type="text/javascript">alert("You are now registered");</script>
    </body>
</html>
