<!DOCTYPE html>
<html>
<head><title>LIBRARY MANAGEMENT SYSTEM</title></head>
<body>
<form action = "" method ="post">
<label>Name</label><input type ="text" name =""><br>
<label>Boohnumbeer</label><input type ="text" name =""><br>
<label>Title</label><input type ="text" name =""><br>
<label>Authorname</label><input type ="text" name =""><br>
<label>Edition</label><input type ="text" name =""><br>
<label>Publication</label><input type ="text" name =""><br>
<button type ="submit" value = "insert" name ="add">ADD</button>
</form>
<?php
$servername = "localhost";
$username = "localhost";
$password = "";
$dbname = "book";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}if(isset($_POST['ADD']{
$Name=$_POST['NAME'];
$Booknumbeer=$_POST['BOOK_NO'];
$Title=$_POST['TITLE'];
$Authorname=$_POST['AUTHOR NAME'];
$Edition=$_POST['EDITION'];
$Publication=$_POST['PUBLICATION'];
}

$sql = "INSERT INTO details(NAME,BOOK_NO,TITLE,AUTHOR NAME,EDITION,PUBLICATION) VALUES ('$Name','$Booknumbeer','$Title','$Authorname','$Edition','$Publication')";

$run =mysqli_query($conn,$sql) or die(mysqli_error());
if($run){
echo "inserted";
}
else{
echo "inserted";
}
?>
</body>
</html>

