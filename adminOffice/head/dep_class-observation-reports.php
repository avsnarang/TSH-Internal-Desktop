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
  <title>Department - Class Observations</title>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="topnav" id="myTopnav">
    <a href="/adminOffice/head/it_head.php">Home</a>
    <div class="dropdown">
        <button onclick="window.location.href='head_reports.php'" class="dropbtn">Reports
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="/adminOffice/head/dep_class-observation-reports.php">Class Observation Reports</a>
            <a href="https://docs.google.com/forms/d/1X2sMBF56EmF4SXx8A8H6qzLDUslqn_hAOAIjHZNXJLE/edit?usp=sharing" target="_blank">Admin Work Done</a>
            <a href="/adminOffice/head/counselling_reports/counselling_reports.html">Counselling Reports</a>
            <a href="/adminOffice/head/case_studies/casestudy_main.html">Case Study Reports</a>
            <a href="https://docs.google.com/forms/d/16vg3OnK3cUcjrYANqHTyelZZBI6Ov3FsnFdeRks63N8/edit?usp=sharing" target="_blank">Self-Analysis HoD's</a>
        </div>
    </div>
    <a href="#">Work</a>
    <a href="/adminOffice/head/about-it-head.php">About</a>
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
    <a href="#" onclick="signOut();" class="split">Sign out</a>
    <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
<script>
    function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
    }
</script>
<div class="buttons">
  <button type="button" class="fill" onclick="window.location.href='/adminOffice/head/Observations_Forms/observe_forms.html'">Forms</button>
  <button type="button" class="fill" onclick="window.location.href='/adminOffice/head/Observations_Excel/observe_excel.html'">Excel</button>
</div>
</body>
</html>