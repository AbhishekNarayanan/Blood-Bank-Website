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
    background-color: rgba(120,0,0,0.9);
    color: white;
    border: 1px solid black;
    text-align:center;
    padding: 12px;
    font-weight:bold;
    font-size: 150%;

}
h1{padding :10px;
background-color:rgb(100,0,0);
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

<center><h1>Emergency 24-Hour Helplines</h1></center>
<table>
 <tr>
    <th>Blood Bank</th>
    <th>Helpline</th>
<tr>
<td>Bangalore Baptist Hospital</td>
<td>23330322 / 23330323</td></tr>
<tr><td>Bangalore Children's Hospital & Research Centre</td>
<td>28600252 / 28600552</td></tr>
<tr><td>Bangalore Hospital</td>
<td>26562753 / 26565494</td></tr>
<tr><td>Bangalore Institute of Oncology</td>
<td>22225698 / 22225644</td></tr>
<tr><td>Bhagwan Mahaveer Jain Hospital</td>
<td>22207640 / 22207649</td></tr>
<tr><td>BKF - Round Table Voluntary Blood Bank</td>
<td>26392697</td></tr>
<tr><td>Dr. Shivaji Rao's Blood Bank</td>
<td>22224044</td></tr>
<tr><td>Grace Blood Bank</td>
<td>23336608</td></tr>
<tr><td>HOSMAT</td>
<td>25543746</td></tr>
<tr><td>Karnataka Red Cross Blood Bank ( Voluntary )</td>
<td>22268435</td></tr>
<tr><td>KIMS Hospital</td>
<td>26673056 / 26624870</td></tr>
<tr><td>Lions Blood Bank ( Voluntary )</td>
<td>22266807</td></tr>
<tr><td>Jeeva Voluntary Blood Bank & Diagnotic Centre</td>
<td>26500736</td></tr>
<tr><td>Jayadeva Institute of Cardiology</td>
<td>26534600</td></tr>
<tr><td>Minerva Voluntary Blood Bank</td>
<td>26574830</td></tr>
<tr><td>M S Ramaiah Medical Hospital</td>
<td>23606545 / 23606524</td></tr>
<tr><td>Narayana Hrudayala</td>
<td>27835000 / 27835001</td></tr>
<tr><td>Navarang Blood Bank</td>
<td>23521233</td></tr>
<tr><td>Naveen Blood Bank</td>
<td>26341907</td></tr>
<tr><td>NIMHANS</td>
<td>26995000 / 26568121</td></tr>
<tr><td>Rashtrothana Blood Bank</td>
<td>26612730</td></tr>
<tr><td>Rotary - TTK Blood Bank</td>
<td>25293486 / 25287903</td></tr>
<tr><td>Sagar Apollo Hospital</td>
<td>26536700 / 26536701</td></tr>
<tr><td>Sanjay Gandhi Accodent Hospital & Research Institute</td>
<td>26564516</td></tr>
<tr><td>Sushruta Voluntary Blood Bank</td>
<td>23447666 / 23340153</td></tr>
<tr><td>Unique Blood Bank</td>
<td>26700685 / 26709970</td></tr>
<tr><td>Vanivilas Hospital</td>
<td>26705206</td></tr>
<tr><td>Victoria Hospital</td>
<td>26701150</td></tr>
</table>
</body>
<html>

