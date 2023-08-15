
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
<form action="reg.php" method="POST">
	
	First Name: <input type="text" name="fname"><BR>
	Last Name: <input type="text" name="lname"><BR>
	CNIC: <input type="text" name="cnic"><BR>
	Email: <input type="email" name="email"><BR>
	pass: <input type="password" name="pass"><BR>

	<input type="submit" name="submit" value="Submit"> 

</form>


<?php
        if(isset ($fn) || isset($ln) || isset($cn) || isset($em) || isset($pw) ) {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fastnu";
        
        
/////////////////GET POST VALUES//////////////////
$fn = $_POST["fname"];
$cn = $_POST["cnic"];
$em = $_POST["email"];
$pw = $_POST["pass"];
/////////////////GET POST VALUES//////////////////
        
        }

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user ( FirstName, LastName, CNIC, email, pass )
VALUES ('".$fn."', '".$ln."', '".$cn."', '".$em."', '".$pw."')";

//echo $sql."<BR>";

if (mysqli_query($conn, $sql)) {
  echo "Congratulations you are now registerd in our system.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

        
mysqli_close($conn);

?>

</body>
</html>