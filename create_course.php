<?php
session_start();
if (empty($_SESSION['username'])) {
    header("Location: login.php");
}
if($_SESSION['user']!='admin'){
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
    <title>Create Course</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>

    </style>
</head>
<body>
<div class="contact-clean">
    <form method="post" action="connectivity.php">
        <h2 class="text-center">Create Course</h2>
        <div class="form-group">
            <input class="form-control" type="text" name="course_id" placeholder="Course ID" required>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Course Name" required>
        </div>
        <div class="form-group">
            <textarea class="form-control" type="text" name="description" placeholder="Course Description..."></textarea>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="img_url" placeholder="Img URL (Optional)">
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="create_course" value="Create Course"/>
        </div>
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
