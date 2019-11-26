<?php
session_start();
if (empty($_SESSION['username'])) {
    header("Location: login.php");
}
if ($_SESSION['user'] != 'admin'){
    header('Location: 403.php');
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post" action="connectivity.php">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="number" name="lecturer_id" placeholder="Lecturer ID"></div>
                <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Full Name"></div>
                <div class="form-group"><input class="form-control" type="text" name="img_url" placeholder="Img URL (Optional)"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)"></div>
                <div class="form-group"><input class="btn btn-primary btn-block" type="submit" value="Register" name="create_account"/></div><a href="#" class="already">You already have an account? Login here.</a></form>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-5" id="openButton">
            <div class="form-group">
                <?php
                if ($_SESSION['user'] == 'admin')
                    echo '<input type="image" src="assets/img/home.png" width="65px" height="55px" style="height: 55px; width: 65px;" class="btn btn-primary" alt="home" onclick="location.href =\'admin_index.php\'"/>';
                else
                    echo '<input type="image" src="assets/img/home.png" width="65px" height="55px" style="height: 55px; width: 65px;" class="btn btn-primary" alt="home" onclick="location.href =\'lecturer_index.php\'"/>';
                ?>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>