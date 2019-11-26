<?php
session_start();
if (empty($_SESSION['username']))
    header('Location: login.php');
echo $_SESSION['current_class'];
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
    <div class="row d-flex justify-content-center mt-5">
        <form action="pi_controller.php" method="post">
            <input class="btn btn-primary" type="submit" value="Start Scanning" name="start_scanning" />
        </form>
    </div>
    <div class="row d-flex justify-content-center mt-5" >
        <form action="pi_controller.php" method="post">
            <input class="btn btn-danger" type="submit" value="Stop Scanning" name="stop_scanning" />
        </form>
    </div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
