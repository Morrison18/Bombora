<?php
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
$name = $_POST['name'];

$contact = $_POST['contact'];

$email = $_POST['email'];

$lesson_type = $_POST['lesson_type'];

$day = $_POST['day'];

$time = $_POST['time'];

$other_requirements = $_POST['other_requirements'];

$experience = $_POST['experience'];



// attempt insert query execution

mysqli_query($con, "INSERT INTO booking (name, contact, email, lesson_type, day, time, other_requirements, experience) VALUES ('$name', '$contact', '$email', '$lesson_type', '$day', '$time', '$other_requirements', '$experience')");

if (mysqli_affected_rows($con) > 0) {
    echo 'Lesson Booked successfully.';
} else {
    echo "ERROR: Could not execute $sql. ".mysqli_error($con);
}



?>
<html>
   <head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../vendors/normalise.css">
    <link rel="stylesheet" type="text/css" href="../vendors/Grid.css">
    <link rel="stylesheet" type="text/css" href="../vendors/ionicons-5.0.0.designerpack/">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/queries.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css">
    <title>Booking</title>

    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicons/favicon-16x16.png">
    <link rel="manifest" href="../images/favicons/site.webmanifest">
    <link rel="mask-icon" href="../images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="../images/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="../images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
   </head>

<body>
   <header>
        <nav>
            <a href="index.html"><img src="../images/websiteGif_1_2.gif" class="logo"></a>
            <div class="row">

                <ul class="main-nav">

                    <li style="margin-left: 0;"><a href="../index.html">Home</a></li>
                    <li><a href="../shop.html">Shop</a></li>
                    <li><a href="../rent.html">Rentals</a></li>
                    <li><a href="../lesson.html">Lessons</a></li>
                    <li><a href="../contact.html">About</a></li>

                </ul>
            </div>
        </nav>
        <div class="wave-text-box">

            <h1>Booking Details</h1>


        </div>
    </header>
   <section class="result">
       <?php
       $result = mysqli_query($con,"select * from booking where email = '$email'");

echo "<table class='row'>
<tr>
<th>Booking Id</th>
<th>Name</th>
<th>Contact</th>
<th>E-mail</th>
<th>lesson type</th>
<th>Day</th>
<th>Time</th>
<th>experience</th>
<th>Requirements</th?
</tr>";

//3. Use returned data 

while($row = mysqli_fetch_array($result))
  {
  echo "<tr style='background-color: #fff;
    border-radius: 5px;
    width: 90%;
    margin-left: 22.5%;
    margin-right: 5%;
    margin-top: 50%;
    box-shadow: 0 7px 7px rgba(114, 232, 241, 0.37);
    text-align: left;'>";
  echo "<td style='padding-right: 5px; text-align: left;'>" . $row['booking_id'] . "</td>";
  echo "<td style='padding-right: 5px;text-align: left;'>" . $row['name'] . "</td>";
  echo "<td style='padding-right: 5px;text-align: left;'>" . $row['contact'] . "</td>";
  echo "<td style='padding-right: 5px;text-align: left;'>" . $row['email'] . "</td>";
  echo "<td style='padding-right: 5px;text-align: left;'>" . $row['lesson_type'] . "</td>";
  echo "<td style='padding-right: 5px;text-align: left;'>" . $row['day'] . "</td>";
  echo "<td style='padding-right: 5px;text-align: left;'>" . $row['time'] . "</td>";
  echo "<td style='padding-right: 5px;text-align: left;'>" . $row['experience'] . "</td>";
  echo "<td style='padding-right: 5px;text-align: left;'>" . $row['other_requirements'] ."</td>";
  echo "</tr>";
  }
echo "</table>";
       
       // close connection



mysqli_close($con);
       ?>
       
       
   </section>
    <section class="footer">

        <div class="row">

            <div class="col span-1-of-4 box">
                <a href="../shop.html"> <i class="ion-bag icon-big"></i></a>
                <h3>Shop</h3>
            </div>
            <div class="col span-1-of-4 box">
                <a href="../book.html#bok"> <i class="ion-android-calendar icon-big"></i></a>
                <h3>Bookings</h3>
            </div>
            <div class="col span-1-of-4 box">
                <a href="../contact.html#con"><i class="ion-ios-telephone icon-big"></i></a>
                <h3>Contact</h3>
            </div>
            <div class="col span-1-of-4 box">
                <a href="../contact.html#loc"> <i class="ion-location icon-big"></i> </a>
                <h3>Location</h3>
            </div>
        </div>

    </section>
    <footer>

        <div class="row">
            <a href="../index.html"><img style="height: 100px; float: right;" src="../images/logoVersions/newlogoWhite.png"></a>
            <a href="../index.html"><img style="height: 100px; float: left;" src="../images/logoVersions/newlogoWhite.png"></a>
            <p style="text-align: center;">
                <br>Copyright &copy; 2020 by Brian Morrison.<br> All rights reserved.

            </p>
            <div class="col span-1-of-2">
                <ul class="social-links">

                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                </ul>
            </div>
        </div>

    </footer>
<script type="text/javascript">alert("Your Booking Details a below,"+<br>+"Please take note of your booking ID number.");</script></body>
</html>