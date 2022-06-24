<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include '../linkages/header-admin.php';
    ?>
    <title>Counselling Reports</title>
</head>
<body>
<?php
include_once '../../head/linkages/top-nav-adminHead.php';
?>
<div class="buttons">
  <button class="fill" type="button" onclick="window.location='/adminOffice/head/counselling_reports/students-counselling.php'">Students Counselling Reports</button>
  <button class="fill" type="button" onclick="window.location='/adminOffice/head/counselling_reports/teachers-counselling.php'">Teachers Counselling Reports</button>
  <button class="fill" type="button" onclick="window.location='/adminOffice/head/counselling_reports/classes-group-session.php'">Group Session Reports</button>
  <button type="button" class="fill_red" onclick="window.open('https://docs.google.com/forms/d/1rRE2rFd1eNjyJmj4NYk1_s97YW0w54hU_Vp5alALVAE/edit?usp=sharing','_blank')">Parental Record</button><br>
  <button type="button" class="fill_purple" onclick="window.location.href='/adminOffice/head/counselling_reports/excel_reports.php'">Reports</button>
</div>
</body>
</html>