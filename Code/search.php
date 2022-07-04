<!DOCTYPE html>
<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);  
error_reporting(E_ALL ^ E_NOTICE);  


?>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="head.css">
 <link rel="stylesheet" type="text/css" href="styling.css">

<style>
<link rel="stylesheet" type="text/css" href="head.css">
 <link rel="stylesheet" type="text/css" href="form.css">
	<style>

table {
    border-collapse: collapse;
    width: 100%;
}

td {
    text-align: left;
    padding: 8px;
    border: 1px solid black;
    font-weight:bold;


}

* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: red;
    color: white;
    border: 1px solid black;
    text-align:center;
    padding: 12px;
    font-weight:bold;
    font-size: 150%;

}
h1{padding :10px;
background-color:#45a049;
color:white}

.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 20%;
	height: 30%;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

.container {
    padding: 2px 16px;
}

h1{
	color:rgb(128,0,0);
	text-align:center;
}


* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}


</style>
</head>
<body>
<ul>
   <li class="dropdown">
  <a href="blood.php" class="dropbtn">Home</a>
  <div class="dropdown-content">
      
  </div>
  </li>
  <li class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">Search</a>
  <div class="dropdown-content">
      <a href="interface.php">Search Blood Banks near you</a>
      <a href="searchbydonor.php">Search a donor near you</a>
  </div>
  </li>
  <li class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">Join Us	</a>
  <div class="dropdown-content">
      <a href="register.php">Create a new Account</a>
      <a href="eligibility.php">Register as a donor</a>
      <a href="register_volunteer.php">Register as a volunteer</a>
      <a href="refer_friend.php">Refer a Friend</a>
  </div>
  </li>
  <li><a href="login.php">Login</a></li>
  <li><a href="accordion.php">Blood Tips</a></li>
  <li class="dropdown">
	<a href="javascript:void(0)" class="dropbtn">Events</a>
	<div class="dropdown-content">
		<a href="upcoming-events.php">Upcoming Events</a>
		<a href="past-events.php">Past Events</a>
		<a href="host_event.php">Host an Event</a>
	</div>
  </li>
 <li class="dropdown">
	<a href="javascript:void(0)" class="dropbtn">Media</a>
	<div class="dropdown-content">
		<a href="testimonials.php">Testimonials</a>
		<a href="photo-gal.php">Photo Gallery</a>
		<a href="press-rel.php">Press Release</a>
	</div>
  </li>

  <li class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">Support</a>
  <div class="dropdown-content">
      <a href="faq.php">F.A.Q</a>
      <a href="feedback.php">Feedback</a>
      <a href="helplines.php">24-Hour-Phoneline</a>
      <a href="contact.php">Contact Us</a>
  </div></li>

<?php
if(isset($_SESSION['name']))
{
?>
<li class="dropdown"><pre>                      			 </pre></li>

<li class="dropdown"><a href="javascript:void(0)" class="dropbtn"><?php echo "WELCOME ".$_SESSION['name']; ?></a>
<div class="dropdown-content">
<a href="logout.php">Logout</a>
</div></li>
<?php
}
?>
</ul>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ebloodbank";

//
extract($_POST);
echo "<br>";
echo "<h3>Region     : ".$region."\t and Blood type : ".$b_type."</h3> <br>";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($region!==" " && $b_type===" "){
$sql = "SELECT * FROM `banks` WHERE `region` LIKE '$region' ";
}
else if($region===" " && $b_type!==" "){
$sql = "SELECT * FROM `banks` WHERE `b_type` LIKE '$b_type' ";
}
else if($region!==" " && $b_type!==" "){
$sql = "SELECT * FROM `banks` WHERE `b_type` LIKE '$b_type' AND `region` LIKE '$region' ";
}
	
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
<table width="100%">
 <tr>
    <th>Field</th>
    <th>Details</th></tr>
<tr><td>Blood Bank Name</td>
<?php echo "<td>".$row["name"]."</td>" ?></td></tr>
<tr><td>Address</td>
<?php echo "<td>".$row["location"]."</td>" ?></td></tr>
<tr><td>Contact</td>
<?php echo "<td>".$row["phone"]."</td>" ?></td></tr>
</table>
</center>
<br>
<br>
<?php echo("<iframe src=".$row['map']."  width='100%' height='450' frameborder='0' style='border:0' allowfullscreen></iframe>")?>;
<br>
<br>
<?php


    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>