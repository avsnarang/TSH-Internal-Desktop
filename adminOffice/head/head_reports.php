<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require '/adminOffice/head/linkages/header-admin.php';
    ?>
    <title>IT Head Reports</title>
</head>
<body>
<?php
    include '/adminOffice/head/linkages/top-nav-adminHead.php';
?>
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