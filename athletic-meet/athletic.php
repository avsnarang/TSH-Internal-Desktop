<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Athletic</title>
</head>
<body>
<?php
$conn = new mysqli("localhost","u950483018_scholars","Scholars123","u950483018_auth_verify");

// Check connection
if ($conn -> connect_errno) {
     echo "Failed to connect to MySQL: " . $conn -> connect_error;
     exit();
}

$sql = "SELECT U_Name, U_Class FROM best_player";
$result = mysqli_query($conn, $sql);
?>

     <form>
          <lable for = "U_Name">Name:</lable>
          <input type = "text" id="U_Name" name="U_Name">
          <input type = "submit" name = "submit">
     </form>

<?php
if (mysqli_num_rows($result) > 0) {
     while($row = mysqli_fetch_assoc($result)) {
          if (isset($_POST['submit'])) {
               if (isset($_POST['U_Name']) === $row['U_Name']) {
                    echo $row['U_Name'];
                    echo "Name Matched!  --- Entry Fields here...";
               }
               else {
                    echo "Name not matched!";
               }
          }
          else {
               echo "Not Submitted!";
          }
     }
}
else {
     echo "Failed";
}
mysqli_close($conn);
?>
</body>
</html>
