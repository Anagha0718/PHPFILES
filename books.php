<!DOCTYPE html>
<html>
<head><title>LIBRARY MANAGEMENT SYSTEM</title></head>
<body>
<form action = "books.php" method ="post">
<label>NAME</label><input type ="text" name ="NAME"><br>
<label>Booknumbeer</label><input type ="text" name ="Booknumber"><br>
<label>Title</label><input type ="text" name ="Title">Title<br>
<label>Authorname</label><input type ="text" name ="Authorname"><br>
<label>Edition</label><input type ="text" name ="Edition"><br>
<label>Publication</label><input type ="text" name ="Publication"><br>
<button type ="submit" value = "insert" name ="submit">submit</button>
</form>
<?php
$servername = "localhost";
$username = "localhost";
$password = "";
$dbname = "book";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}if(isset($_POST['submit'])){
echo 'yes';
$NAME=$_POST['NAME'];
$Booknumbeer=$_POST['BOOK_NO'];
$Title=$_POST['TITLE'];
$Authorname=$_POST['AUTHOR NAME'];
$Edition=$_POST['EDITION'];
$Publication=$_POST['PUBLICATION'];
}

$sql = "INSERT INTO details(NAME,BOOK_NO,TITLE,AUTHOR NAME,EDITION,PUBLICATION) VALUES ("$Name","$Booknumbeer","$Title","$Authorname","$Edition","$Publication")";

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

