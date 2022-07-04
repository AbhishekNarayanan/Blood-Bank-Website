<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);  
error_reporting(E_ALL ^ E_NOTICE);  


?>
  <!DOCTYPE html>

<html>
<head>
<title>
Blood Tips
</title>
 <link rel="stylesheet" type="text/css" href="head.css">

 <link rel="stylesheet" type="text/css" href="dropdown.css">
 <link rel="stylesheet" type="text/css" href="styling.css">
<style>


ul.arrow {
    list-style-image: url('arrow.png');
}


ul.tick {
    list-style-image: url('tick.jpg');
}

ul.cross {
    list-style-image: url('cross.png');
}

* {box-sizing:border-box}
	body {font-family: Verdana,sans-serif;margin:0}
	.mySlides {display:none}

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
</style>
</head>
<body>

<ul style="list-style-type: none;margin: 0;padding: 0;background-color: #333;height:50px;">
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

<h1>Blood Tips</h1>

<button class="accordion">Why Donate Blood</button>
<div class="panel">
  <p>Blood is the living fluid that all life is based on. Blood is composed of 60% liquid part and 40% solid part. The liquid part called Plasma, made up of 90% water and 10% nutrients, hormones, etc. is easily replenished by food, medicines, etc. But the solid part that contains RBC (red blood cells), WBC (white blood cells) and Platelets take valuable time to be replaced if lost.
  This is where you come in. The time taken by a patient's body to replace it could cost his/her life. Sometimes the body might not be in a condition to replace it at all.<br><br>
  As you know blood cannot be harvested it can only be donated. This means only you can save a life that needs blood.
  Every year India requires 40 million units of 250cc blood out of which only a meager 500,000 of blood units are available.
  Saving a life does not require heroic deeds. You could just do it with a small thought and an even smaller effort by saying "yes".</p>
</div>

<button class="accordion">Who Needs Blood</button>
<div class="panel">
  <p>Every 2 seconds someone needs blood. Your blood helps more than one life at a time. Accident victims, premature babies, patients undergoing major surgeries require whole blood, where your blood after testing is used directly. Patients suffering from trauma, anemia, and other surgeries require only red blood cells, which is separated from your blood. The procedure of splitting blood components is called Cytapheresis. Similarly blood platelets are used for cancer patients undergoing chemotherapy or for those undergoing treatment for dengue fever etc. Fresh frozen plasma is used for patients having massive transfusions, plasma is used for burns and cryoprecipitate is used for hemophilia.<br><br>
  Blood is needed at regular intervals and at all times as it has only finite time of storage. Red blood cells can be stored for about 42 days, fresh frozen plasma and cryoprecipitate for 365 days and blood platelets for 5 days.</p>
</div>

<button class="accordion">Beat the myth</button>
<div class="panel">
  <p> Donating blood is safe and simple. It takes approximately 10-15 minutes to complete the blood donation process. Any healthy adult between 18 years and 60 years of age can donate blood. This is what you can expect when you are ready to donate blood:

    <ul class="arrow">
      <li>You walk into a reputed and safe blood donation centre or a mobile camp organized by a reputed institution.</li><br>
      <li>A few questions will be asked to determine your health status (general questions on health, donation history etc). Usually you will be asked to fill out a short form.</li><br>
      <li>Then a quick physical check will be done to check temperature, blood pressure, pulse and hemoglobin content in blood to ensure you are a healthy donor.</li><br>
      <li>If found fit to donate, then you will be asked to lie down on a resting chair or a bed. Your arm will be thoroughly cleaned. Then using sterile equipments blood will be collected in a special plastic bag. Approximately 350 ml of blood will be collected in one donation. Those who weigh more than 60 Kg can donate 450 ml of blood.</li><br>
      <li>Then you must rest and relax for a few minutes with a light snack and something refreshing to drink. Some snacks and juice will be provided.</li><br>
      <li>Blood will be separated into components within eight hours of donation</li><br>
      <li>The blood will then be taken to the laboratory for testing.</li><br>
      <li>Once found safe, it will be kept in special storage and released when required.</li><br>
      <li>The blood is now ready to be taken to the hospital, to save lives.</li><br>
    </ul></p>
</div>

<button class="accordion">Blood Groups</button>
<div class="panel">
  <p>Blood type is determined by which antibodies and antigens the person's blood produces. An individual has two types of blood groups namely ABO-grouping and Rh-grouping. Rh is called as the Rhesus factor that has come to us from Rhesus monkeys.<br><br>
  Most humans are in the ABO blood group. The ABO group has four categories namely<br><br>
  1) A group 2) B group 3) O group and 4) AB group<br><br>
  In the Rh- group, either the individual is said to be Rh- Negative or Rh- Positive.<br><br>
  Thus blood group of any human being will mainly fall in any one of the following groups. <br>
  <ul class="arrow">
    <li>A positive or A negative</li><br>
    <li>B positive or B negative</li><br>
    <li>O positive or O negative</li><br>
    <li>AB positive or AB negative</li><br>
  </ul>
  </p>
</div>
<button class="accordion">Universal Donor and Recipients</button>
<div class="panel">
  <p>The most common blood type is O, followed by type A.<br><br>
  Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.<br><br>
  However, since approximately twice as many people in the general population have O and A blood types, a blood bank's need for this type of blood increases exponentially.</p>
</div>
<button class="accordion">Do donate blood, only if you satisfy all of the below conditions</button>
<div class="panel">
  <p>
    <ul class="tick">
      <li>You are between age group of 18-60 years.</li><br>
      <li>Your weight is 45 kgs or more.</li><br>
      <li>Your hemoglobin is 12.5 gm% minimum</li><br>
      <li>Your last blood donation was 3 or more months earlier.</li><br>
      <li>You are healthy and have not suffered from malaria, typhoid or other transmissible disease in the recent past.</li><br>
    </ul>
  </p>
</div>
<button class="accordion">Do not donate blood, if you have any of the following conditions</button>
<div class="panel">
  <p>
    <ul class="cross">
      <li>Cold / fever in the past 1 week.</li><br>
      <li>Under treatment with antibiotics or any other medication.</li><br>
      <li>Cardiac problems, hypertension, epilepsy, diabetes (on insulin therapy), history of cancer, chronic kidney or liver disease, bleeding tendencies, venereal disease etc.</li><br>
      <li>Major surgery in the last 6 months.</li><br>
      <li>Vaccination in the last 24 hours.</li><br>
      <li>Had a miscarriage in the last 6 months or have been pregnant / lactating in the last one year.</li><br>
      <li>Had fainting attacks during last donation.</li><br>
      <li>Have regularly received treatment with blood products.</li><br>
      <li>Shared a needle to inject drugs/ have history of drug addiction.</li><br>
      <li>Had sexual relations with different partners or with a high risk individual.</li><br>
      <li>Been tested positive for antibodies to HIV.</li><br>
    </ul>
  </p>
</div>
<button class="accordion" >A Healthy Donor</button>
<div class="panel">
  <p>
    A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
    <ul class="arrow">
      <li>Low fat foods</li><br>
      <li>Iron rich foods</li>
    </ul>
</div>
<button class="accordion">Blood Bank</button>
<div class="panel">
  <p>
    A blood bank is a place designed especially for the storage of blood and blood products. Large coolers hold these products at a constant temperature and they are available at a moment's notice
  </p>
</div>
<button class="accordion">About Blood Donation</button>
<div class="panel">
  <p>Donating blood is a life saving measure especially when you have a rare blood type.  Blood donation is safe and simple. It takes only about 10 minutes to donate blood - less than the time of an average telephone call. We can save upto 3 to 4 precious lives by donating blood..</p>
</div>
<button class="accordion">World Donor Day</button>
<div class="panel">
  <p>The day is celebrated to raise awareness globally about the need for regular and voluntary blood donation</p>
</div>
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
