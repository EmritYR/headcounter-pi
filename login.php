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
    <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
        <div class="container"><a class="navbar-brand" href="index.php">HeadCounter</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                 id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Contact Us</a></li>
                </ul>
            </div>
    </nav>
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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>