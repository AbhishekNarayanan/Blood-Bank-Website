<!DOCTYPE html>
<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);  
error_reporting(E_ALL ^ E_NOTICE);  


?><html>

<html>
<head>
<title>
Post a Query
</title>
 <link rel="stylesheet" type="text/css" href="head.css">
 <link rel="stylesheet" type="text/css" href="styling.css">
<style>

body {
    margin: 0 auto;

    padding: 0 px;
}

* {box-sizing:border-box}
	body {font-family: Verdana,sans-serif;margin:0}
	.mySlides {display:none}
	
.container {
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
}

.darker {

    background-color: #ddd;
border: 2px solid #dedede;

    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
}

.container::after {
    content: "";
    clear: both;
    display: table;
}
.darker::after {
    content: "";
    clear: both;
    display: table;
}
.container img {
    float: left;
    max-width: 60px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
}

.darker img{
    float: right;
    max-width: 60px;
    width: 100%;
    margin-left: 20px;
    border-radius: 50%;
}

.time-right {
    float: right;
    color: #aaa;
}

.time-left {
    float: left;
    color: #999;
}
input[type=text], select, input[type=password],input[type=email],input[type=tel]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	}


	input[type=submit],button{
    width: 100%;
    background-color: rgb(128,0,0);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	}

	input[type=submit],button:hover {
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

<h2 align="center">Customer Queries</h2>

<br>

<p>Note: The names and email ids provided by you here will not be shared with any third party organizations or will not be used for any commercial purpose. Please read our Privacy policy. We ensure a 24-Hour guarantee for replying to our customer-queries. Please contact our 24x7 Helpline for emergency. Customer queries will shortly be answered through the registered mail ids provided. This facility may be availed in case our 24-Hour helpline is down or busy due to unforseen circumstances</p>
<br>
    <textarea id="subject" name="Feedback" placeholder="Write something.." style="height:200px;margin:5px" id="ta" cols="130" ></textarea>

<br>
<button onclick = "addpost()"> Post a Query</button>
<script>
var count2 = 0;
var countc =0;
function addpost()
{
var textarea=document.querySelector("textarea");
create(textarea.value);
textarea.value="";
}
function create(s1)
{

    var division = document.createElement("div");
		division.setAttribute("id","division"+count2);
				division.setAttribute("class","container");
    var img = document.createElement("img");

img.setAttribute("src","img_avatar2.png");
img.setAttribute("style:width","100%");

    var post = document.createElement("p");
post.textContent=s1;
    count2++;
var d=new Date();

var time=document.createElement("p");
time.setAttribute("class","time-left");
time.textContent="Posted on "+d;

var br=document.createElement("br");
    division.appendChild(img);
    division.appendChild(post);
division.appendChild(time);
    division.appendChild(br);
    document.body.insertBefore(division,document.body.childNodes[count2+4]);

 var division1 = document.createElement("div");
		division1.setAttribute("id","division"+count2);
division1.setAttribute("class","darker");
    var img1 = document.createElement("img");
img1.setAttribute("src","images.jpg");

img1.setAttribute("style:width","100%");
messages=["Greetings! Thank you for visiting our website! Your query has been noted down and you will be contacted by our customer service shortly.","Dear Customer, it is our pleasure to serve you and we hope our service meets your expectations! We will ensure that your query is answered at the earliest. ","We hereby confirm the recieval of your query and are currently looking into it. We request you to be patient till we get back with a reply at the earliest. Thank You for your cooperation","This is to inform you that your query has been registered and is currently under process, awaiting a response from our customer care staff. We request you to bear with the proceedings as we make an attempt to reply as soon as possible"];
var n=parseInt(Math.random()*4);
    var post1 = document.createElement("p");
post1.textContent=messages[n];
    count2++;
var d1=new Date();

var time1=document.createElement("p");
time1.setAttribute("class","time-right");
time1.textContent="Posted on "+d;

var br1=document.createElement("br");
    division1.appendChild(img1);
    division1.appendChild(post1);
division1.appendChild(time1);
    division1.appendChild(br1);
    document.body.insertBefore(division1,document.body.childNodes[count2+4]);}

</script>

</body>
</html>

