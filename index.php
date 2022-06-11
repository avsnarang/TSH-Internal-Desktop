<?php
session_start([
    'cookie_lifetime' => 600,
    'read_and_close'  => true,
]);
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
            <script>
                function handleCredentialResponse(response) {
                    console.log("Encoded JWT ID token: " + response.credential);
                    console.log("ID: " + response.sub);
                    console.log('Full Name: ' + response.name);
                    console.log("Email: " + response.email);
                    email = response.email;
                    window.location.href = "https://tsh.edu.in/redirect.php?email=" + email;
                }
                window.onload = function () {
                google.accounts.id.initialize({
                    client_id: "584175274872-hlf4ccq2q15ki7ua6h2sanijnind4lj9.apps.googleusercontent.com",
                    callback: handleCredentialResponse
                });
                }
            </script>
            <div id="g_id_onload"
                data-client_id="584175274872-hlf4ccq2q15ki7ua6h2sanijnind4lj9.apps.googleusercontent.com"
                data-context="signin"
                data-ux_mode="popup"
                data-callback="handleCredentialResponse"
                data-nonce=""
                data-auto_prompt="false">
            </div>

            <div class="g_id_signin"
                data-type="standard"
                data-shape="rectangular"
                data-theme="outline"
                data-text="signin_with"
                data-size="large"
                data-logo_alignment="left">
            </div>
        </center>
    </div>
</div>
</body>
</html>