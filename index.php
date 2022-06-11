<?php
session_start();

if(isset($_SESSION['uid'])) {
    header("Location: profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <meta name="google-signin-client_id" content="584175274872-hlf4ccq2q15ki7ua6h2sanijnind4lj9.apps.googleusercontent.com">
    <link rel="stylesheet" href="overflow.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <title>Login Page</title>
    <style>
        img {
            background-size: cover;
            height: 100vh;
            background-position: center;
            text-align: center;
        }
        body {
            overflow: hidden;
        }
    </style>
</head>
<body>
<img src="/Images/HomePage/School Building - 2-min.jpg" alt="School Building">
<script src="/clear_cookies.js"></script>
<div class="bg-img">
    <div class="content">
        <header>Login With</header>
        <center>
            <script src="https://accounts.google.com/gsi/client" async defer></script>
            <script type=''>
            </script>
            <script>
                function handleCredentialResponse(response) {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            if('success' == this.responseText) {
                                // redirect to profile page
                                window.location.href = 'profile.php';
                            }
                        }
                    };
                    xhttp.open("POST", "save-user.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("response="+response.credential);
                }
                window.onload = function () {
                google.accounts.id.initialize({
                    client_id: "584175274872-hlf4ccq2q15ki7ua6h2sanijnind4lj9.apps.googleusercontent.com",
                    callback: handleCredentialResponse
                });
                google.accounts.id.renderButton(
                    document.getElementById("buttonDiv"),
                    { theme: "outline", size: "large", width: "200" }  // customization attributes
                );
                }
            </script>
            <div id="buttonDiv"></div>
        </center>
    </div>
</div>
</body>
</html>