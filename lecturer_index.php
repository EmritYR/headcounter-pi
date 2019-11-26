<?php
session_start();
if (empty($_SESSION['username'])) {
    header('Location: login.php');
}

if ($_SESSION['user'] == 'admin') {
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
    <title>Lecturer</title>
</head>
<body>
<div class="container">
    <div class="row text-center">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <a href="create_class.php"><h4 class="card-title">Create Class</h4></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
