<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include '/Users/avsnarang/Coding/htmlProjects/TSH-Internal-Desktop/adminOffice/head/linkages/header-admin.php';
    include '/public_html/adminOffice/head/linkages/header-admin.php'
    ?>
    <title>IT Head Reports</title>
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
	<button type="button" class="fill_red" onclick="window.location.href='dep_class-observation-reports.php'">Class Observation Reports - Departments</button>
	<button type="button" class="fill_green" onclick="window.open('https://docs.google.com/forms/d/1X2sMBF56EmF4SXx8A8H6qzLDUslqn_hAOAIjHZNXJLE/edit?usp=sharing', '_blank')">Admin Office Work Report</button>
	<button type="button" class="fill_teal" onclick="window.location.href='/adminOffice/head/counselling_reports/counselling_reports.html'">Counselling Reports</button>
	<button type="button" class="fill_orange" onclick="window.location.href='/adminOffice/head/case_studies/casestudy_main.html'">Case Study Reports</button>
	<button type="button" class="fill_purple" onclick="window.open('https://docs.google.com/forms/d/16vg3OnK3cUcjrYANqHTyelZZBI6Ov3FsnFdeRks63N8/edit?usp=sharing','_blank')">Self-Analysis HoD(s)</button>
    <button type="button" class="fill_pink" onclick="window.location.href='/adminOffice/head/feedback/parental.html'">Parental Feedback</button>
</div>
</body>
</html>