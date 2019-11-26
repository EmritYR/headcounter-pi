<?php
session_start();

if (!empty($_SESSION['username'])) {
    header("Location: account.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Headcounter</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<div class="login-dark">
    <form method="post" action="connectivity.php">
        <h2 class="sr-only">Login Form</h2>
        <div class="illustration">
            <i class="icon ion-ios-locked-outline"></i>
        </div>
        <div class="form-group">
            <input class="form-control" type="number" name="id" placeholder="ID">
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <input class="btn btn-primary btn-block" type="submit" name="login" value="Login"/>
        </div>
        <a href="#" class="forgot">Forgot your email or password?</a>
        <hr>
        <p class="forgot">Contact the system administrator for your login credentials </p>
    </form>
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