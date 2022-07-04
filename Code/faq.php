<!DOCTYPE html>
<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);  
error_reporting(E_ALL ^ E_NOTICE);  


?>
<html>
<head>
<title>
Blood Tips
</title>

 <link rel="stylesheet" type="text/css" href="dropdown.css">
 <link rel="stylesheet" type="text/css" href="styling.css">
<style>
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

* {box-sizing:border-box}
	body {font-family: Verdana,sans-serif;margin:0}
	.mySlides {display:none}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

button.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\2212";
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
h1{padding :10px;
background-color:rgb(128,0,0);
color:white}
h2{padding :10px;
background-color:rgb(128,0,0);
color:white}

</style>
</head>
<body>



<ul style="list-style-type: none;margin: 0;padding: 0;background-color: #333;height:50px;position:sticky;top:0;z-index:100;">
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

<h1>Frequently Asked Questions</h1>

<button class="accordion">What are the minimum requirements to become a blood donor?
</button>
<div class="panel">
  <p>Check with your local blood bank to determine the specific requirements. You must be at least 16 years of age, a minimum of 110 pounds, and in basic good health.</p>
</div>

<button class="accordion">Will donating blood hurt?
</button>
<div class="panel">
  <p>You might feel a slight sting in the beginning lasting only a couple of seconds, but there should be no discomfort during the donation.

</p>
</div>

<button class="accordion">Are blood donors paid?


</button>
<div class="panel">
  <p> No. Blood collected for transfusion in the US is collected from volunteer blood donors.</p>
</div>

<button class="accordion">How badly is blood needed?
</button>
<div class="panel">
  <p>Blood supplies vary depending on the region and time of year. As more restrictive donor criteria are necessary to protect the safety of the blood supply and as the donor population ages, the inventory levels are affected across the nation. If you are eligible, your blood donations are needed. The inventory levels of blood would be more consistently maintained if more of those who are eligible donate 1-2 times each year.


  </p>
</div>
<button class="accordion">Why are there often blood shortages?
</button>
<div class="panel">
  <p>Most blood centers strive to maintain an optimum inventory level of a three-day supply. Due to unpredictable demands for trauma patients, the inventory fluctuates hourly. When the blood supply drops below a three-day level, blood centers begin alerting local donors to increase the inventory to a safe operating level.</p>
</div>
<button class="accordion">Are sterile supplies used?
</button>
<div class="panel">
  <p>
    Based on AABB Standards and FDA regulations, all needles, tubing sets, collection bags and other donation supplies are sterile, used once, and discarded in the trash to protect the donor, the transfusion recipient, and the blood donor center staff.

  </p>
</div>
<button class="accordion" >
How much blood is taken?
</button>
<div class="panel">
  <p>
   For a whole blood donation, approximately 500 ml or one-half liter of blood is collected. For donations of other blood products, such as platelet or plasma, the amount collected depends on your height, weight and platelet count.

</p>
    
</div>
<button class="accordion">How often may I donate?
</button>
<div class="panel">
  <p>
   The Medical Director of each blood donor center is responsible for setting policies regarding the frequency of donation. The policies set by a Medical Director can be more restrictive, permitting donation less frequently than permitted by AABB Standards and FDA regulations. Based on AABB and FDA requirements, you must wait 56 days between whole blood donations. Platelet (apheresis) donors may donate more frequently. This is because the body replenishes platelets and plasma more quickly than red cells. Platelets will return to normal levels within about 72 hours of donating. Plasma (the liquid portion of your blood) will return to normal levels within a couple of days. 


  </p>
</div>
<button class="accordion">Does donated blood stay on the shelf indefinitely until it is used?

</button>
<div class="panel">
  <p>No. Each unit of whole blood is separated into several components. Red blood cells may be stored under refrigeration for a maximum of 42 days, or frozen for up to 10 years. Platelets are stored at room temperature and may be kept for a maximum of five to seven days. Fresh frozen plasma is kept in a stored frozen state for up to one year. Cryoprecipitated AHF is stored frozen for up to one year. Granulocytes must be transfused within 24 hours of donation.<br>
Other products manufactured from blood include albumin, immune globulin, specific immune globulins, and clotting factor concentrates. Commercial manufacturers commonly produce these blood products.
</p>
</div>
<button class="accordion">Are the history questions necessary every time I donate?
</button>
<div class="panel">
  <p>Yes, this ensures the safest possible blood supply, all donors must be asked all the screening questions at each donation. Both AABB and FDA regulations specifically require that all blood donors complete the donor history questionnaire on the day of donation and prior to donating.</p>
</div>

<button class="accordion">If I was deferred once before, am I still ineligible to donate?

</button>
<div class="panel">
  <p>Your blood donor center will inform you if you are permanently deferred or temporarily deferred. The deferral time depends upon the reason for deferral. Prior to each donation, you will be given a mini-physical and medical interview. At that time, it will be determined if you are eligible to donate blood on that day.
</div><button class="accordion">
If I just received a flu shot, can I donate blood?

</button>
<div class="panel">
  <p>Yes. There is no waiting period to donate after receiving a flu shot.</p>
</div><button class="accordion">
If I have a cold or the flu, can I donate blood?

</button>
<div class="panel">
  <p>No, blood blood centers require that you be in good health (symptom-free) and feeling well.</p>
</div><button class="accordion">
Can I still donate if I have high blood pressure?

</button>
<div class="panel">
  <p>Yes, if your blood pressure falls within the limits set by FDA regulations.</p>
</div><button class="accordion">
What if I'm taking aspirin or medication prescribed by my doctor?

</button>
<div class="panel">
  <p>Your blood donor center can best answer your questions. We recommend that you call the blood donor center ahead of time to inquire about any medications you are taking. Aspirin and ibuprofen will not affect a whole blood donation. However, apheresis platelet products can be effected if aspirin or aspirin products are taken 48 hours prior to donation. Many other medications are acceptable.
</p>
</div><button class="accordion">
How long will the actual donation process take?

</button>
<div class="panel">
  <p>The entire donation process, from registration to post-donation refreshments, takes about one hour. The actual donation takes about 5-10 minutes.</p>
</div><button class="accordion">
How will I feel after I donate?

</button>
<div class="panel">
  <p>Most people tolerate blood donation very well. However, some people experience fatigue. You should discuss your concerns before and after donation with a staff member at the blood donor center or blood drive. They can offer recommendations regarding strenuous exercise and other physical activity following donation
</p>
</div><button class="accordion">
Where can I donate blood?

</button>
<div class="panel">
  <p>Use the AABB blood bank locator to find the blood donation center nearest you or search the internet for current information on blood donation in your area. We recommend you contact the blood donor center for more information.
</p>
</div><button class="accordion">
What can you do if you aren't eligible to donate?

</button>
<div class="panel">
  <p>If you are unable to donate, you may be able to volunteer to help recruit donors or to organize mobile blood drives. In addition, monetary donations are always welcome to help ensure that blood banks can continue to provide safe blood to those in need.
</p>
</div><button class="accordion">
How can I host a blood drive at my work, school or church?

</button>
<div class="panel">
  <p>Use the AABB blood bank locator to find the blood donor center for more information on how you can help patients in need.</p></p>
</div>
<br>
<a href="chat.php"><h2>Post a Query</h2></a>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>

</body>
</html>
