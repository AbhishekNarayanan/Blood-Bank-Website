<!DOCTYPE html>
<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);  
error_reporting(E_ALL ^ E_NOTICE);  


?>
<html>
<head>
<title>
Contact Info
</title>
 <link rel="stylesheet" type="text/css" href="head.css">
 <link rel="stylesheet" type="text/css" href="styling.css">

	<title>Contact Us</title>
	<style type="text/css">
		p {
    		font-size: 18px;
		}
		img.i1 {
   		 display: block;
   		 margin: auto;
   		 width: 100%;
		}
		img.i2 {
   			 float: right;
   			 width:35%;height:120px;
		}
	</style>
</head>
<body style="margin:0;">

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


<img src="contact3.jpg" class="i1">
<br>
<hr>
<img src="social.png" class="i2" usemap="#workmap">
<map name="workmap">
  <area shape="rect" coords="10,15,90,100" alt="facebook" href="https://www.facebook.com">
  <area shape="rect" coords="120,15,200,100" alt="twitter" href="https://www.twitter.com">
  <area shape="rect" coords="220,15,300,100" alt="google+" href="https://www.google.com">
  <area shape="rect" coords="320,15,400,100" alt="pinterest" href="https://www.google.com">
</map>

<p>NB-305, Pes Boys Hostel<br>
Pes University, BSK-3rd Stage<br>
Bangalore-560085<br>
Tel : +91 – 11 – 29054066 – 69 (24 Hours)<br>
E-mail Id : contact@bloodbank.org</p>

<br>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3888.848857791469!2d77.5971943!3d12.9174341!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3e468d8d36d3%3A0x694d74f6ac640acf!2sPES+University!5e0!3m2!1sen!2sin!4v1511355537927" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</body>
</html>
