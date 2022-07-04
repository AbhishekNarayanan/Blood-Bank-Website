
<!DOCTYPE html>
<?php
error_reporting(E_ALL ^ E_WARNING);  
error_reporting(E_ALL ^ E_NOTICE);  
session_start();

?>
<?php
error_reporting(E_ALL ^ E_WARNING^E_NOTICE);  
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db="ebloodbank";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
mysqli_select_db($db);

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$age=$_POST['Age'];
$city=$_POST['City'];
$mobile=$_POST['mobile'];
$residence=$_POST['residence'];
$office=$_POST['office'];
$email=$_POST['Email'];
$event=$_POST['Event'];
$aid=$_POST['aid'];
$day=$_POST['day'];

$sql="INSERT INTO event_registration(`Firstname`, `Lastname`, `Age`, `City`, `Mobile`, `Residence`, `Office`, `Email`, `Event`, `Day`, `Aid`) VALUES ('$firstname','$lastname','$age','$city','$mobile','$residence','$office','$email','$event','$day','$aid')";

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

