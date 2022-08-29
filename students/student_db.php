<?php
include 'student_db_connect.php';
$searchErr = '';
$employee_details='';
if(isset($_POST['save']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $stmt = $con->prepare("select * from student_db where name like '%$search%'");
        $stmt->execute();
        $student_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //print_r($employee_details);

    }
    else
    {
        $searchErr = "Please enter the information";
    }

}

?>
<!doctype html>
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

    <title>ajax example</title>
    <link rel="stylesheet" href="bootstrap.css" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="bootstrap-theme.css" crossorigin="anonymous">
    <style>
        .container{
            width:70%;
            height:30%;
            padding:20px;
        }
        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }
        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }
        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }
    </style>
</head>

<body>
<center>
<div class="container">
    <form class="form-horizontal" action="#" method="post">
        <div class="row">
            <div class="form-group">
                <label class="control-label col-sm-4" for="email"><b>Search Student Information:</b>:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="search" placeholder="search here" style="text-transform:capitalize">
                </div>
                <div class="col-sm-2">
                    <button type="submit" name="save" class="btn btn-success btn-sm">Submit</button>
                </div>
            </div>
            <div class="form-group">
                <span class="error" style="color:red;">* <?php echo $searchErr;?></span>
            </div>

        </div>
    </form>
    <br/><br/>
    <h3><u>Search Result</u></h3><br/>
    <div class="table-responsive">
        <table class="styled-table">
            <thead>
            <tr>
                <th> Serial Number </th>
                <th> Name of the Student </th>
                <th> Admission Number </th>
                <th> Fathers' Name </th>
                <th> Mothers' Name </th>
            </tr>
            </thead>
            <tbody>
            <?php
            if(!$student_details)
            {
                echo '<tr>No data found</tr>';
            }
            else{
                foreach($student_details as $key=>$value)
                {
                    ?>
                    <tr>
                        <td><?php echo $value['Serial Number'];?></td>
                        <td><?php echo $value['Name'];?></td>
                        <td><?php echo $value['Admission Number'];?></td>
                        <td><?php echo $value['Fathers\' Name'];?></td>
                        <td><?php echo $value['Mothers\' Name'];?></td>
                    </tr>

                    <?php
                }

            }
            ?>

            </tbody>
        </table>
    </div>
</div>
<script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>
</center>
</body>
</html>
