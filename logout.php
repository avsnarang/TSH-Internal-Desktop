<?php
include 'index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="584175274872-hlf4ccq2q15ki7ua6h2sanijnind4lj9.apps.googleusercontent.com">
    <link rel="stylesheet" href="/overflow.css">
    <link rel="stylesheet" type="text/css" href="/homepage_styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Principal</title>
</head>
<body>
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

<h1>You have successfully logged out!</h1>
<button type="button" class="fill" onclick="window.location.href='https://tsh.edu.in'">Continue Home</button>
</body>
</html>
<?php
session_destroy();
?>