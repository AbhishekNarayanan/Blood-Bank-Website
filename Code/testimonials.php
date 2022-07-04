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
.container {
  border: 2px solid #ccc;
  background-color: #eee;
  border-radius: 5px;
  padding: 16px;
  margin: 16px 0
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  margin-right: 20px;
  border-radius: 50%;
}

.container span {
  font-size: 20px;
  margin-right: 15px;
}

@media (max-width: 500px) {
  .container {
      text-align: center;
  }
  .container img {
      margin: auto;
      float: none;
      display: block;
  }
}
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
<h1>TESTIMONIALS<p id="demo"><center></center></p></h1>
<div >

<div class="container">
  <img src="av1.jpg" alt="Avatar" style="width:90px">
  <p><span>Rebecca Flex</span>"Donors Saved My Mom, Now it's My Turn"</p>
  <p>My mom has had many stays in the hospital the past two years, and has needed many bags of blood. 
  Without donors, my mom would not be here right now. If you're thinking of donating, please go do it. 
  You might be scared of needles, or the sight of blood, etc. but is a moments discomfort really worth the life of someone's loved one? 
  I feel good every day knowing that I've helped keep someone on this Earth who otherwise might not have survived, and all because 
  of a bit of my blood.</p>
</div>

<div class="container">
  <img src="av2.png" alt="Avatar" style="width:90px">
  <p><span >Bhrigid</span> "Giving blood saves Lives"</p>
  <p>I have been giving blood since I was 18. Most years as often as possible. 
  I received a BS in Medical Technology and worked many years in blood banks. 
  I saw first hand how blood donations save lives. Giving blood has always been my way of giving to others in need.</p>
</div>

<div class="container">
  <img src="av3.png" alt="Avatar" style="width:90px">
  <p><span >Dana</span> "Returning the Favor"</p>
  <p>I choose to donate blood because there was a time that I had to have blood.
  I have had 3 back surgeries and after every one of them they have had to give me blood. 
  If it wasn't for blood donors I would not have gotten the blood I needed and could have died. So that is why return the favor.</p>
</div>

<div class="container">
  <img src="av6.jpg" alt="Avatar" style="width:90px">
  <p><span >Peter</span> "Why I give blood?"</p>
  <p>At the age of three my son was diagnosed with ALL, Acute Lymphoblastic Leukemia. 
  Throughout his three years andthree months of treatment, he received numerous blood transfusions. 
  I had always donated blood but after seeing how this gift made a difference in my son, right before my eyes, I knew I would be a lifetime donor.</p>
</div>

</body>
</html>
