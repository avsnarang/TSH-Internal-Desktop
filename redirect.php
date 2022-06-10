<html lang="en">
<head>
    <title>Bridge</title>
</head>
<body>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bridge</title>
</head>
<body>
<?php
$g_email = $_GET['email'];
$g_id = $_GET['id'];
$conn = new mysqli("localhost","u950483018_scholars","Scholars123","u950483018_auth_verify");

// Check connection
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
}

$sql = "SELECT Email, Designation, Department FROM user_verification";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        if ($g_email === $row['Email']) {
            echo "<h1>" . $row['Email'] . "</h1>";
            $db_email = $row['Email'];
            $db_department = $row['Department'];
            $db_designation = $row['Designation'];

            if ($db_department === 'English' && $db_designation === "HoD") {
                header("Location: https://tsh.edu.in/HoD/English/english_hod.html", true, 301);
            } 
            elseif ($db_department === 'Hindi' && $db_designation === "HoD") {
                header("Location: https://tsh.edu.in/HoD/Hindi/hindi_hod.html", true, 301);
            }
            elseif ($db_department === 'Mathematics' && $db_designation === "HoD") {
                header("Location: https://tsh.edu.in/HoD/Maths/maths_hod.html", true, 301);
            }
            elseif ($db_department === 'Science' && $db_designation === "HoD") {
                header("Location: https://tsh.edu.in/HoD/Science/science_hod.html", true, 301);
            }
            elseif ($db_department === 'Social Science' && $db_designation === "HoD") {
                header("Location: https://tsh.edu.in/HoD/SSc/ssc_hod.html", true, 301);
            }
            elseif ($db_department === 'Information Technology' && $db_designation === "HoD") {
                header("Location: https://tsh.edu.in/it_hod.html", true, 301);
            }
            elseif ($db_department === 'Admin Office' && $db_designation === "IT Handler") {
                header("Location: https://tsh.edu.in/adminOffice/admin.html", true, 301);
            }
            elseif ($db_department === 'Admin Office' && $db_designation === "IT Head") {
                header("Location: https://tsh.edu.in/adminOffice/head/it_head.html?"."id=".$id."ver=true".$ver, true, 301);
            }
            elseif ($g_email == 'test1@tsh.edu.in') {
                header("Location: https://tsh.edu.in/adminOffice/head/it_head.html", true, 301);
            }
            elseif ($g_email == 'gknarang@thescholarshome.com') {
                header("Location: https://tsh.edu.in/owners/owners-main.html", true, 301);
            }
            elseif ($g_email == 'npsnarang@tsh.edu.in') {
                header("Location: https://tsh.edu.in/owners/owners-main.html", true, 301);
            }
            elseif ($g_email == 'nishaparmar@thescholarshome.com') {
                header("Location: https://tsh.edu.in/principal/principal-main.html", true, 301);
            }
            elseif ($g_email == 'xseedleader@thescholarshome.com' && $db_designation == 'Xseed Leader') {
                header("Location: https://tsh.edu.in/Xseed_Leader/xseed_main.html", true, 301);
            }
            else {
                echo "<h1>Something went wrong!</h1>";
                exit();
            }
        } 
        else {
            echo "<h1>Email not verified with Database!</h1>";
        }
    }
}
mysqli_close($conn);
?>
</body>
</html>
