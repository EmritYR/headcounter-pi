<?php
session_start();
if (empty($_SESSION['username']))
    header('Location: login.php');
if ($_SESSION['user'] == 'admin') {
    header('Location: 403.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <title>Scanner</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-5">
        <?php
        echo '<h1>Class: ' . $_SESSION['current_class'] . '</h1>'
        ?>
    </div>
</div>
<div class="container">
    <div class="row d-flex justify-content-center mt-5">
        <form action="pi_controller.php" method="post">
            <input class="btn btn-primary" type="submit" value="Start Scanning" name="start_scanning"/>
        </form>
    </div>
    <div class="row d-flex justify-content-center mt-5">
        <form action="pi_controller.php" method="post">
            <input class="btn btn-danger" type="submit" value="Stop Scanning" name="stop_scanning"/>
        </form>
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
