<?php
include("bb.php");
error_reporting(0);
?>
<html>
<head></head>
<body>
<form action = "bank.php" method ="POST">
BLOODGROUP<input type ="text" name = "bloodgroup" value =""/><br>
LOCATION<input type = "text" name ="location" value=""/><br>
<input type = "SUBMIT" name = "SUBMIT" value="SUBMIT"> 
</form>
<?php
$servername = "localhost";
$username = "localhost";
$password = "";
$dbname = "blood_bank";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$pn = $_POST["bloodgroup"];         
$pl = $_POST["location"];
$rn = $_POST["no"];
echo $pn;
echo $pl;
echo $rn;
if(isset($_POST['SUBMIT']))
{echo $rn;
}
error_reporting(E_ALL);
?>


</body>
</html>