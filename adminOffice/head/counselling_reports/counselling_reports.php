<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include '../linkages/header-admin.php';
    ?>
    <title>Counselling Reports</title>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="topnav" id="myTopnav">
    <a href="/adminOffice/head/it_head.php">Home</a>
    <div class="dropdown">
        <button onclick="window.location.href='../head_reports.php'" class="dropbtn">Reports
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="/adminOffice/head/dep_class-observation-reports.php">Class Observation Reports</a>
            <a href="https://docs.google.com/forms/d/1X2sMBF56EmF4SXx8A8H6qzLDUslqn_hAOAIjHZNXJLE/edit?usp=sharing" target="_blank">Admin Work Done</a>
            <a href="/adminOffice/head/counselling_reports/counselling_reports.php">Counselling Reports</a>
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
  <button class="fill" type="button" onclick="window.location='/adminOffice/head/counselling_reports/students-counselling.html'">Students Counselling Reports</button>
  <button class="fill" type="button" onclick="window.location='/adminOffice/head/counselling_reports/teachers-counselling.html'">Teachers Counselling Reports</button>
  <button class="fill" type="button" onclick="window.location='/adminOffice/head/counselling_reports/classes-group-session.html'">Group Session Reports</button>
  <button type="button" class="fill_red" onclick="window.open('https://docs.google.com/forms/d/1rRE2rFd1eNjyJmj4NYk1_s97YW0w54hU_Vp5alALVAE/edit?usp=sharing','_blank')">Parental Record</button><br>
  <button type="button" class="fill_purple" onclick="window.location.href='/adminOffice/head/counselling_reports/excel_reports.html'">Reports</button>
</div>
</body>
</html>