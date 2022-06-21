<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="584175274872-hlf4ccq2q15ki7ua6h2sanijnind4lj9.apps.googleusercontent.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<a href="/HoD/English/english_hod.html"> Home </a>
    <a href="/HoD/English/english_hod_reports.html"> Reports </a>
    <a href="404page.html"> Work </a>
    <a href="404page.html"> About  </a>
    <script>
        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
                console.log('User signed out.');
                window.location.href = "https://tsh.edu.in";
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