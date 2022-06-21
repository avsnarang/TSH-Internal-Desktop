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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet" />
     <link rel="icon" type="image/x-icon" href="/img/favicon.png">
     <link rel="preconnect" href="https://fonts.googleapis.com"> 
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
     <link href="https://fonts.googleapis.com/css2?family=Nuosu+SIL&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com"> 
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
     <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600&display=swap" rel="stylesheet">
     <title>About - IT Head</title>
     <style>
          h1{
               font-size: 60px;
               font-weight: bold;
               font-family: 'Nuosu SIL', serif;
          }
          .text-box {
               font-family: 'Nunito Sans', sans-serif;
               font-weight: 300;
               margin: 20px 100px;
          }
          .text-box p{
               text-align: justify;
               font-size: 26px;
          }
          .text-box ul{
               text-align: justify;
               font-size: 22px;
          }
          .text-box li{
               text-align: justify;
               font-size: 22px;
          }
     </style>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="topnav" id="myTopnav">
    <a href="/adminOffice/head/it_head.php">Home</a>
    <div class="dropdown">
        <button onclick="window.location.href='/adminOffice/head/head_reports.html'" class="dropbtn">Reports
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="/adminOffice/head/dep_class-observation-reports.html">Class Observation Reports</a>
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
<h1>About TSH Internal</h1>
<div class="text-box">
     <p>
          This website is created for the purpose of receiving all kinds of Reports from HoD(s)/Coordinators, School Counsellor, Xseed Leader 
          and Teachers. This website can also be used to provide information to the Parents and Students in the future. <br></br>
          These reports help the Management to study and understand of all the different things happening in and around the school, like:
     </p>
     <ul>
          <li>Counselling of the Students</li>
          <li>Classroom Teaching style of the Teachers</li>
          <li>Work Done in a day by Administrators</li>
          <li>Parental Contact with the School Counsellor</li>
          <li>HoD(s) and Coordinators Analysis</li>
     </ul>
</div>
</body>
</html>