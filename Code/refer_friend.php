<!DOCTYPE html>
<?php
session_start();
error_reporting(E_ALL ^ E_WARNING^E_NOTICE);  


?>
<html>
<head>
<title>
Refer a Friend
</title>
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


	input[type=submit],button {
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

<img src="refer_friend.jpg" width="85%" height="300px" align="center">
<h3>Recommend your Friends and Relatives to join our Joint Venture Now!</h3>

<button onclick = "addpost()"> Recommend a Friend</button>
<p>Note: The names and email ids provided by you here will not be shared with any third party organizations or will not be used for any commercial purpose. Please read our Privacy policy.

	</p>

<script>
var count2 = 0;
var countc =0;
function addpost()
{

    var division = document.createElement("div");
		division.setAttribute("id","division"+count2);
				division.setAttribute("class","p");
    var post = document.createElement("form");
    post.action="save_refer_friend.php";
    post.method="POST";
    var post1 = document.createElement("fieldset");
var leg=document.createElement("legend");
leg.textContent="Personal details";
		
	var lbl1 = document.createElement("label");
		lbl1.setAttribute("id","label"+count2);
		lbl1.textContent = "First Name*";
   
    var name1 = document.createElement("input");
		name1.setAttribute("type","text");
		name1.setAttribute("id", "fn"+count2);
		name1.setAttribute("placeholder","first name..");
           name1.name="firstname";
 var lbl2 = document.createElement("label");
		lbl2.setAttribute("id","label"+count2);
		lbl2.textContent = "Last Name*";
    
   var name2 = document.createElement("input");
		name2.setAttribute("type","text");
		name2.setAttribute("id", "ln"+count2);
          name2.name="lastname";
		name2.setAttribute("placeholder","last name..");
var lbl6 = document.createElement("label");
		lbl6.setAttribute("id","label"+count2);
		lbl6.textContent ="Office Contact*";
    
   var email= document.createElement("input");
		email.setAttribute("type","email");
		email.setAttribute("id", "tel"+count2);
		email.setAttribute("placeholder","Email account..");
           email.name="email";
var lbl3 = document.createElement("label");
		lbl3.setAttribute("id","label"+count2);
		lbl3.textContent = "Contact Number*";
    
   var ph1 = document.createElement("input");
		ph1.setAttribute("type","tel");
		ph1.setAttribute("id", "tel"+count2);
		ph1.setAttribute("placeholder","contact number..");
           ph1.name="mobile";
 var lbl4 = document.createElement("label");
		lbl4.setAttribute("id","label"+count2);
		lbl4.textContent = "Residence";
    
   var ph2 = document.createElement("input");
		ph2.setAttribute("type","tel");
		ph2.setAttribute("id", "tel"+count2);
		ph2.setAttribute("placeholder","Residence phone..");
           ph2.name="residence";
 var lbl5 = document.createElement("label");
		lbl5.setAttribute("id","label"+count2);
		lbl5.textContent ="Office Contact*";
    
   var ph3= document.createElement("input");
		ph3.setAttribute("type","tel");
		ph3.setAttribute("id", "tel"+count2);
		ph3.setAttribute("placeholder","Office phone..");
          ph3.name="office";
    
   var sub= document.createElement("input");
		sub.setAttribute("type","submit");
		sub.setAttribute("id", "sub"+count2);

    count2++;


var br=document.createElement("br");
    post1.appendChild(leg);
    post1.appendChild(lbl1);
    post1.appendChild(name1);
    post1.appendChild(lbl2);
    post1.appendChild(name2);
    post1.appendChild(lbl3);
    post1.appendChild(ph1);
    post1.appendChild(lbl6);
    post1.appendChild(email);
    post1.appendChild(lbl4);
    post1.appendChild(ph2);
    post1.appendChild(lbl5);

    post1.appendChild(ph3);
    post1.appendChild(sub);

    post.appendChild(post1);

    division.appendChild(post);
    division.appendChild(br);
    document.body.insertBefore(division,document.body.childNodes[count2+2]);
}
addpost();
</script>
</body>
</html>
