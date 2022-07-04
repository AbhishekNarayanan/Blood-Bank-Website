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

<br>
<h1>PAST EVENTS<p id="demo"><center></center></p></h1><br><br><br>
<div >

<div class="card" style="display:inline-block;position:relative; left:200px">
  <img src="blood-don.jpg" alt="Avatar" style="width:100%;height:200px;">
  <div class="container">
    <h4><b>BLOOD DONATION CAMP AT KIMS</b></h4> 
	<h5><b>20 AUG 2017</b></h5>
    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua........</p> -->
  </div>
</div>

<div class="card" style=" position:relative; left:300px; display:inline-block;">
  <img src="blood-aware.jpg" alt="Avatar" style="width:100%;height:200px">
  <div class="container">
    <h4><b>BLOOD DONATION AWARENESS PROGRAMME</b></h4> 
	<h5><b>15 JULY 2017</b></h5>
    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua........</p> -->
  </div>
</div> 

<div class="card" style=" position:relative; left:400px; display:inline-block;">
  <img src="donor-day.jpg" alt="Avatar" style="width:100%;height:200px">
  <div class="container">
    <h4><b>BLOOD DONATION CAMP on WORLD BLOOD DONOR DAY</b></h4> 
	<h5><b>14 JUN 2017</b></h5>
    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua........</p> -->
  </div>
</div> 
  
</div>

<div style="position:relative; top:100px">

<div class="card" style="display:inline-block;position:relative; left:200px">
  <img src="event9.jpg" alt="Avatar" style="width:100%;height:200px">
  <div class="container">
    <h4><b>BLOOD DONATION CAMPAIGN by MNC NURSES</b></h4> 
	<h5><b>19 MAY 2017</b></h5>
    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua........</p> -->
  </div>
</div>

<div class="card" style=" position:relative; left:300px; display:inline-block;">
  <img src="event8.jpg" alt="Avatar" style="width:100%;height:200px">
  <div class="container">
    <h4><b>BLOOD DONATION CAMP AT PESU</b></h4> 
	<h5><b>30 APRIL 2017</b></h5>
    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua........</p> -->
  </div>
</div> 

<div class="card" style=" position:relative; left:400px; display:inline-block;">
  <img src="event6.jpg" alt="Avatar" style="width:100%;height:200px">
  <div class="container">
    <h4><b>INAUGRATION OF MAYA BLOOD BANK</b></h4> 
	<h5><b>09 JAN 2017</b></h5>
    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua........</p> -->
  </div>
</div> 
  <br><br>
</div>

<script>
var i = 0;
var txt = "Share a little, care a little - DONATE BLOOD!";
var speed = 75;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

typeWriter();
</script>

<p></p>
</body>
</html> 
