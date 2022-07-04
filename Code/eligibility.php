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
<title>Check Your Eligibility</title>
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

	* {box-sizing:border-box}
	body {font-family: Verdana,sans-serif;margin:0}
	.mySlides {display:none}
	
	input[type=submit] {
    width: 100%;
    background-color: rgb(128,0,0);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	}

	input[type=submit]:hover {
    background-color: rgb(100,0,0);
	}

	div.form {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	}
h2{padding :10px;
background-color:rgb(128,0,0);
color:white}
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

<h2>Check if you are Elibigible to be a Donor:-</h2>
<h3>Please fill in the following fields to verify your eligibility for donorship:</h3>
<div class="p">
  <form action="validate_eligibility.php" method="post">
<img src="eligibility.jpg" width="55%" height="350px" style="float:left">
  	<fieldset>
  		<legend>Case History</legend>
           <br/>
    <label for="case history">Kindly uncheck existing invalid fields</label>
    <br/><br>
 	 <input type="checkbox" name="case1" value="My hemoglobin is not less than 12.5 grams" checked/>My hemoglobin is not less than 12.5 grams <br>
 	     <br/><input type="checkbox" name="case2" value="I am free from acute respiratory diseases and skin diseases" checked/>I am free from acute respiratory diseases and skin diseases <br>
 	            <br/><input type="checkbox" name="case3" value="I do not carry any disease transmissible by blood transfusion" checked/>I do not carry any disease transmissible by blood transfusion checked <br>
 	            <br/><input type="checkbox" name="case4" value="I am not under medication for Malaria / Tuberculosis / Diabetes / Fits /Convulsions" checked/>I am not under medication for Malaria / Tuberculosis / Diabetes / Fits /Convulsions <br>
 	 
</fieldset>
</br><br>
<img src="eligibility1.jpg" width="45%" height="350px" style="float:right">
  	<fieldset>
  		<legend>Medical Information:</legend>
  	<br/>
       
    <label for="diseases">Please check the fields if you have not suffered and/or are suffering from any one of the following :</label>
    <br/><br>
 	 <input type="checkbox" name="diseases1" value=" Hepatitis B, C" /> Hepatitis B, C <br>
 	            <br/><input type="checkbox" name="diseases2" value="AIDS" /> AIDS<br>
 	           <br/> <input type="checkbox" name="diseases3" value="Cancer" />Cancer <br>
 	           <br/> <input type="checkbox" name="diseases4" value="Kidney Diseases" />Kidney Diseases <br>
 	            <br/><input type="checkbox" name="diseases5" value="Heart Ailments " /> Heart Ailments <br>
</fieldset>
  	
 <input type="submit" value="Submit">
</form>
</div>



</body>
</html>
