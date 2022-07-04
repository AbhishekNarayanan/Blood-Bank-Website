<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);  
error_reporting(E_ALL ^ E_NOTICE);  


?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ebloodbank";
if(isset($_SESSION['uname']) && isset($_SESSION['psw']))
{
$uname=$_SESSION['uname'];
$psw=$_SESSION['psw'];
}
else
{
$uname=$_POST['username'];
$psw=$_POST['password'];

}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `registration` WHERE `Username` LIKE '$uname' AND `Password` LIKE '$psw' ";

	
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$_SESSION['uname']=$_POST['username'];
$_SESSION['psw']=$_POST['password'];

    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="head.css">
 <link rel="stylesheet" type="text/css" href="form.css">
 <link rel="stylesheet" type="text/css" href="styling.css">

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
</style>
<title>
24-HOUR Helplines
</title>
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

<?php echo "<center><h1>WELCOME ".$row["Firstname"]." ".$row["Lastname"]."</h1></center>";
$_SESSION['name']=$row["Firstname"]." ".$row["Lastname"];
if($row["Gender"]=="male"){
?>
<div class="imgcontainer">
    <img src="av5.png" height="230px" alt="Avatar" class="avatar">
<?php
}
else
{
?>
 <div class="imgcontainer">
    <img src="av4.png" height="230px" alt="Avatar" class="avatar">
<?php
}?>
  </div>
<table>
 <tr>
    <th>Field</th>
    <th>Details</th></tr>
<tr><td>First Name</td>
<?php echo "<td>".$row["Firstname"]."</td>" ?></td></tr>
<tr><td>Last Name</td>
<?php echo "<td>".$row["Lastname"]."</td>" ?></td></tr>
<tr><td>Age</td>
<?php echo "<td>".$row["Age"]."</td>" ?></td></tr>
<tr><td>Region</td>
<?php echo "<td>".$row["City"]."</td>" ?></td></tr>
<tr><td>Gender</td>
<?php echo "<td>".$row["Gender"]."</td>" ?></td></tr>
<tr><td>Mobile</td>
<?php echo "<td>".$row["Mobile"]."</td>" ?></td></tr>
<tr><td>E-mail</td>
<?php echo "<td>".$row["Email"]."</td>" ?></td></tr>
</table>
<a href="logout.php"><button>Logout</button></a>
</body>
<?php 
}
}
else
{
   include("invalidlogin.php");
}

$conn->close();
?>
