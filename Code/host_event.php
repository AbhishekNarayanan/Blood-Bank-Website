<!DOCTYPE html>
<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);  
error_reporting(E_ALL ^ E_NOTICE);  


?><html>
<head>

	<title>Host an Event</title>
 <link rel="stylesheet" type="text/css" href="head.css">
 <link rel="stylesheet" type="text/css" href="styling.css">

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
<img src="event_2.jpg" width="100%">
<h3>Host A Event With Us :-</h3>
<div class="p">
  <form action="store_host_event.php" method="POST">
  	<fieldset>
  		<legend>Personal Details</legend>
  	<br>
    <label for="fname">First Name*</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
 
    <label for="lname">Last Name*</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
    <br>
    <label for="age">Age*</label>
    <input type="text" id="Age" name="Age" placeholder="Your Age" required style="width:30%;"" >

    <label for="city"><span style="display:inline-block; width: 30px;"></span>Region*</label>
<select id="City" name="City" style="width:30%;">
      <option value="Central">Central Bangalore</option>

      <option value="Central">Central Bangalore</option>
      <option value="North">North Bangalore</option>
      <option value="South">South Bangalore</option>
      <option value="East">East Bangalore</option>
      <option value="West">West Bangalore</option>

    </select>
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
    <label for="Residence">Residence Phone</label>
    <input type="tel" id="Residence" name="residence" placeholder="Your number" style="width:29.2%;">
    <label for="Office"><span style="display:inline-block; width: 30px;"></span>Office Phone</label>
    <input type="tel" id="Office" name="office" placeholder="Your number" style="width:27.5%;">
  	</fieldset>
  <br>

   <label for="Event Type">Event Type*</label>
    <select id="Event Type" name="Event">
      <option value="camp">Blood Donation Camp</option>
      <option value="health">Health Education Camp</option>
    </select>
    <br>
    <label for="date">Enter the date *</label><br>
    <input type="date" name="day"><br><br>

    <label for="aid">What type of Aid do you want from us for your event ?</label>
    <select id="aid" name="aid" onchange="aids()">
      <option value="financial">Financial Aid</option>
      <option value="medical">Medical Aid</option>
      <option value="volunteer">Need Volunteers</option>
      <option value="none">None</option>
    </select>
    <p id="para">A maximum of Rs 10000 will be provided subjected to eligibility and fund balance.</p>
      <input type="submit" value="Submit">


    </form>
</div>
<script type="text/javascript">
  function aids()
  {
  var a=document.getElementById("aid");
  var p=document.getElementById("para");
  if(a.value=="financial")
    p.innerHTML="A maximum of Rs 10000 will be provided subjected to eligibility and fund balance.";
  else if (a.value=="medical")
    p.innerHTML="A medical team compromising a doctor and two blood bank staff will be provided to help in collection of blood.";
  else if (a.value=="volunteer")
    p.innerHTML="Volunteers will be provided subject to avaiblity. Please check our calender for more information";
  else if (a.value=="none")
    p.innerHTML="The organiser will bear everything right from blood collection to blood storage. We will help to advertise this campaign as much as possible!!!";
  }
</script>


</body>
</html>
