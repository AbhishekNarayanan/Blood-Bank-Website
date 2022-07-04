
<!DOCTYPE html>
<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);  
error_reporting(E_ALL ^ E_NOTICE);  


?>
<?php
error_reporting(E_ALL ^ E_WARNING);  

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db="ebloodbank";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
mysqli_select_db($db);

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$user=$_POST['Username'];
$password=$_POST['Password'];
$age=$_POST['Age'];
$city=$_POST['City'];
$bloodgroup=$_POST['bloodgroup'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$residence=$_POST['residence'];
$office=$_POST['office'];
$email=$_POST['Email'];
$authorise="";
$sms="";
$call="";
if(isset($_POST['sms']))
{
	$sms=$_POST['sms'];
}
if(isset($_POST['call']))
{

	$call=$_POST['call'];
	
}
if(isset($_POST['authorise']))
{

	$authorise=$_POST['authorise'];
}

$sql="INSERT INTO donor_registration(`Firstname`, `Lastname`, `Username`, `Password`, `Age`, `City`, `Bloodgroup`, `Gender`, `Mobile`, `Residence`, `Office`, `Email`, `Sms`, `Call_call`, `Authorise`) VALUES ('$firstname','$lastname','$user','$password','$age','$city','$bloodgroup','$gender','$mobile','$residence','$office','$email','$sms','$call','$authorise')";

if (mysqli_query($conn, $sql)) {
?>
<html>
<head>
<style>
body {
    font-family: 'Lato', sans-serif;
}

.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-y: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 10%;
    width: 100%;
    text-align: center;
    margin-top: 20px;
    bottom: 5%;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 10px;
    right: 45px;
    font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
</style>
</head>
<body>

<div id="myNav" class="overlay" style="height:100%">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
   <img src="t2.png" width="100%" height="450px">
  </div>
</div>
<script>

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>
     
</body>
</html>

<?php
error_reporting(E_ALL ^ E_WARNING^E_NOTICE);  

include("blood.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>
