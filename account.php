<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account</title>
</head>
<body>

<?php
if (empty($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-12">
            <div class="form-group">
                <div class="row justify-content-center">
                    <h1><?php echo $_SESSION["lecturer_id"]; ?></h1>
                </div>
                <div class="row justify-content-center">
                    <h5><?php echo $_SESSION["user"]; ?></h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <form method="POST" action="connectivity.php">
                    <input type="submit" name="logout" class="btn btn-primary" value="Logout"/>
                </form>
            </div>
            <div class="form-group">
                <div class="row justify-content-center" id="openButton">
                    <?php
                    if($_SESSION['user'] == 'admin')
                        echo '<input type="image" src="assets/img/home.png" width="65px" height="55px" style="height: 55px; width: 65px;" class="btn btn-primary" alt="home" onclick="location.href =\'admin_index.php\'"/>';
                    else
                        echo '<input type="image" src="assets/img/home.png" width="65px" height="55px" style="height: 55px; width: 65px;" class="btn btn-primary" alt="home" onclick="location.href =\'index.php\'"/>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>