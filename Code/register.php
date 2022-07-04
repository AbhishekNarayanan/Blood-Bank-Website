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

	<title>Join Us</title>
	<style>
	input[type=text], select, input[type=password],input[type=email],input[type=tel]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	}


	input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	}

	input[type=submit]:hover {
    background-color: #45a049;
	}

	div.form {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
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
<img src="volunteer.jpg" width="100%" height="400px">
<h3>Register with us Now :-</h3>
<div class="p">
  <form action="save_data_register.php" method="post">
  	<fieldset>
  		<legend>Personal Details</legend>
  	<br>
    <label for="fname">First Name*</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
 
    <label for="lname">Last Name*</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
    <br>
    <label for="age">Age*</label>
    <input type="text" id="Age" name="Age" placeholder="Your Age" required style="width:30%; >

    <label for="city"><span style="display:inline-block; width: 30px;"></span>Region*</label>
    <select id="City" name="City" style="width:30%;">
      <option value="none">Select Region</option>
      <option value="Central">Central Bangalore</option>
      <option value="North">North Bangalore</option>
      <option value="South">South Bangalore</option>
      <option value="East">East Bangalore</option>
      <option value="West">West Bangalore</option>

    </select>

    <br>

    
    <label for="gender">Gender</label>
    <br>
 	 <input type="radio" name="gender" value="male" checked> Male<br>
 	 <input type="radio" name="gender" value="female"> Female<br>
 	 <input type="radio" name="gender" value="other"> Other<br>  
</fieldset>
  	<br>


  	<fieldset>
  		<legend>Contact Details</legend>
  		<br>
    <label for="mobile">Mobile Phone*</label>
    <input type="tel" id="mobile" name="mobile" placeholder="Your number" style="width:30%;" required >
  
    <label for="Email"><span style="display:inline-block; width: 30px;"></span>Email*</label>
    <input type="email" id="Email" name="Email" placeholder="Your Email Account" style="width:30%;" required >
    <br>
  	</fieldset>
  <br>

  	<fieldset>
  		<legend>Login Details</legend>
  		<br>
    <label for="Username">Username*</label>
    <input type="text" id="Username" name="Username" placeholder="Select a Username" required style="width:30%;">
  
    <label for="Password"><span style="display:inline-block; width: 30px;"></span>Password*</label>
    <input type="Password" id="Password" name="Password" placeholder="Select a Password" required style="width:30%;">
    <br>
    <input type="checkbox" name="sms" value="sms alert">Sms Alert<br>
    <p>
    	You will receive an alert on your mobile.
    </p>
	<input type="checkbox" name="call" value="call alert">Call Alert<br>
	<p>
		You will receive a Call on your mobile.
	</p>
	<input type="checkbox" name="authorise" value="authorise" checked="">Authorise<br>
	<p>
		I authorise the website to display my telephone number, e-mail ID and mailing address so that the needy could contact me, as and when there is an emergency.
	</p>
  	</fieldset>


  <input type="submit" value="Submit">  </form>

</div>



</body>
</html>
