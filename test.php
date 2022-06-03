<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	

<?php


$conn = new mysqli("localhost","u950483018_scholars","Scholars123","u950483018_auth_verify");

// Check connection
if ($conn -> connect_errno) {
	echo "Failed to connect to MySQL: " . $conn -> connect_error;
	exit();
}

$sql = "SELECT * FROM self_analysis_HODs";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
			echo "<h1>How are you</h1>" . "<br><h2>I am good</h2>"; 
		}
	}
echo "<h1>How are you</h1>"; 

?>

</body>
</html>