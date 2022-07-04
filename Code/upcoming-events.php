<!DOCTYPE html>
<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);  
error_reporting(E_ALL ^ E_NOTICE);  


?>
<html>
<head>
<title>
Upcoming Events
</title>

 <link rel="stylesheet" type="text/css" href="dropdown.css">

 <link rel="stylesheet" type="text/css" href="styling.css">
<style>
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

.info {
	margin-bottom: 15px;
    padding: 4px 12px;
    background-color: #e7f3fe;
    border-left: 6px solid #2196F3;
}

.success {
    background-color: #ddffdd;
    border-left: 6px solid #4CAF50;
}

* {box-sizing:border-box}
	body {font-family: Verdana,sans-serif;margin:0}
	.mySlides {display:none}

.img1{
	float: right;
}

/* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}


/*To create the calender*/
* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
    padding: 70px 25px;
    width: 100%;
    background-color: red;
	background: linear-gradient(-90deg, rgb(255,0,0), rgb(128,0,0));
	background-size: 100% 100%;
    text-align: center;
}

.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

.month .prev {
    float: left;
    padding-top: 10px;
}

.month .next {
    float: right;
    padding-top: 10px;
}

.weekdays {
    margin: 0;
    padding: 10px 0;
    background-color: #ddd;
}

.weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
}

.days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
}

.days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color: #777;
}

.days li .active {
    padding: 5px;
    background: red;
    color: white !important
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
    .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
    .weekdays li, .days li {width: 12.5%;}
    .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
    .weekdays li, .days li {width: 12.2%;}
}
</style>
</head>
<body>

<ul style="list-style-type: none;margin: 0;padding: 0;position:sticky;z-index:100;top:0;background-color: #333;height:50px;">
  <li class="dropdown" style="float:left">
  <a href="blood.php" class="dropbtn">Home</a>
  <div class="dropdown-content">
      
  </div>
  </li>
  <li class="dropdown" style="float:left">
  <a href="javascript:void(0)" class="dropbtn">Search</a>
  <div class="dropdown-content">
      <a href="interface.php">Search Blood Banks near you</a>
      <a href="searchbydonor.php">Search a donor near you</a>
  </div>
  </li>
  <li class="dropdown" style="float:left">
  <a href="javascript:void(0)" class="dropbtn">Join Us</a>
  <div class="dropdown-content">
      <a href="register.php">Create a new Account</a>
      <a href="eligibility.php">Register as a donor</a>
      <a href="register_volunteer.php">Register as a volunteer</a>
      <a href="refer_friend.php">Refer a Friend</a>
  </div>
  </li>
  <li style="float:left"><a href="login.php">Login</a></li>
  <li style="float:left"><a href="accordion.php">Blood Tips</a></li>
  <li class="dropdown" style="float:left">
	<a href="javascript:void(0)" class="dropbtn">Events</a>
	<div class="dropdown-content">
		<a href="upcoming-events.php">Upcoming Events</a>
		<a href="past-events.php">Past Events</a>
		<a href="host_event.php">Host an Event</a>
	</div>
  </li>
 <li class="dropdown" style="float:left">
	<a href="javascript:void(0)" class="dropbtn">Media</a>
	<div class="dropdown-content">
		<a href="testimonials.php">Testimonials</a>
		<a href="photo-gal.php">Photo Gallery</a>
		<a href="press-rel.php">Press Release</a>
	</div>
  </li>

  <li class="dropdown" style="float:left">
  <a href="javascript:void(0)" class="dropbtn">Support</a>
  <div class="dropdown-content">
      <a href="faq.php">F.A.Q</a>
      <a href="feedback.php">Feedback</a>
      <a href="helplines.php">24-Hour-Phoneline</a>
      <a href="contact.php">Contact Us</a>
  </div>

  <!--<li><a href="contact.html">Contact Us</a></li>-->


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
<h1><center>UPCOMING EVENTS</center></h1>

<div class="month">     
  <ul>
    <li class="prev"><a href="#">&#10094;</a></li>
    <li class="next"><a href="#">&#10095;<a></li>
    <li>
      October<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">
  <li></li>
  <li></li>  
  <li></li>
  <li></li> 
  <li></li>
  <li></li> 
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li class="popup" onclick="myFunction1()"><span class="active">10</span>
  <span class="popuptext" id="myPopup1">Blood Donation Camp at PES</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li class="popup" onclick="myFunction2()"><span class="active">14</span>
  <span class="popuptext" id="myPopup2">Walk for Blood Donation</span></li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li class="popup" onclick="myFunction3()"><span class="active">24</span>
  <span class="popuptext" id="myPopup3">Blood Donation Awareness Program</span></li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
<div class="clearfix">
<!--<img src="back4.jpg" class="img1"></img>-->
<h3>THIS WEEK</h3>

<div class="info"><table cellspacing="15px">
<tr>
<td align="left"><strong>10</strong></td>
<td rowspan="2">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
</tr>
<tr><td align="left"><strong>OCT</strong></td></tr>
</table></div><br/>

<div class="success"><table cellspacing="15px">
<tr>
<td align="left"><strong>14</strong></td>
<td rowspan="2">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
</tr>
<tr><td align="left"><strong>OCT</strong></td></tr>
</table></div></br>
</div>

<script>
// When the user clicks on date, open the popup

function myFunction1() {
    var popup = document.getElementById("myPopup1");
    popup.classList.toggle("show");
}
function myFunction2() {
    var popup = document.getElementById("myPopup2");
    popup.classList.toggle("show");
}
function myFunction3() {
    var popup = document.getElementById("myPopup3");
    popup.classList.toggle("show");
}
</script>
</body>
</html>

	
