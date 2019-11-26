<?php
session_start();
if (empty($_SESSION['username'])) {
    header('Location: login.php');
}

if ($_SESSION['user'] != 'admin') {
    header('Location: 403.php');
}
echo $_SESSION['user']
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <title>Admin</title>
</head>
<body>
<div class="container">
    <div class="row text-center">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <a href="create_account.php"><h4 class="card-title">Create Lecturer</h4></a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <a href="create_student.php"><h4 class="card-title">Create Student</h4></a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <a href="create_course.php"><h4 class="card-title">Create Course</h4></a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <a href="assign_lecturers.php"><h4 class="card-title">Assign Lecturers</h4></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center mt-5" id="openButton">
        <div class="form-group">
            <?php
            if ($_SESSION['user'] == 'admin')
                echo '<input type="image" src="assets/img/home.png" width="65px" height="55px" style="height: 55px; width: 65px;" class="btn btn-primary" alt="home" onclick="location.href =\'admin_index.php\'"/>';
            else
                echo '<input type="image" src="assets/img/home.png" width="65px" height="55px" style="height: 55px; width: 65px;" class="btn btn-primary" alt="home" onclick="location.href =\'index.php\'"/>';
            ?>
        </div>
    </div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
