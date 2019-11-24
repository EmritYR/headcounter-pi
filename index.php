<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeadCounter</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<div>
    <div class="header-dark">
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
                    <div class="mr-auto"></div>
                    <a class="btn btn-light action-button" role="button" href="login.php">Login</a></div>
            </div>
        </nav>

        <div class="container hero">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-center">Futuristic Attendance Record</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="article-list">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">HeadCounter</h2>
            <p class="text-center"><b>Quickly</b> and <b>Accurately</b> keep attendance for your <br> lectures and lab
                streams. <br> HeadCounter </p>
        </div>
        <div class="row articles">
            <div class="col-sm-6 col-md-4 item"></div>
            <div class="col-sm-6 col-md-4 item">
                <h3 class="name">Get Started</h3>
                <a href="#"><img class="img-fluid" src="assets/img/building.png"></a>
                <p class="description">HeadCounter Attendence Tracking made Simple, Fast and Reliable.</p>
                <a href="#" class="action">
                    <iclass
                    ="fa fa-arrow-circle-right"></i></a></div>
            <div class="col-sm-6 col-md-4 item"></div>
        </div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>