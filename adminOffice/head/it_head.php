<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="584175274872-hlf4ccq2q15ki7ua6h2sanijnind4lj9.apps.googleusercontent.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="/overflow.css">
    <link rel="stylesheet" href="/nav_bar.css">
    <link rel="stylesheet" href="/button_style.css">
    <link rel="stylesheet" href="/homepage_styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    h1{
        font-family: "Times New Roman",serif;
        text-align: center;
    }
    .test p{
        font-family: "Calibri",sans-serif;
        text-align: center;
    }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <title>IT Head</title>
</head>
<body>
<?php 
$g_id = $_GET['id'];
$conn = new mysqli("localhost","u950483018_scholars","Scholars123","u950483018_auth_verify");

$sql = "SELECT id FROM google_verify";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $vid = $row['id'];
        if (!$vid == $id) {
            header("Location: https://tsh.edu.in", true, 301);
        }
    }
}
?>
<a href="/adminOffice/head/it_head.html">Home</a>
<a href="/adminOffice/head/head_reports.html">Reports</a>
<a href="/404page.php">Work</a>
<a href="/404page.php">About</a>
<script>
    function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
            console.log('User signed out.');
            window.location.href = "https://www.tsh.edu.in";
        });
    }
    function onLoad() {
        gapi.load('auth2', function() {
            gapi.auth2.init();
        });
    }
</script>
<a href="#" onclick="signOut();">Sign out</a>
<script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
</body>
</html>