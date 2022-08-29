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
    </style>
</head>

<body>
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
        <table class="table">
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
                        <td><?php echo $key+1;?></td>
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
</body>
</html>
