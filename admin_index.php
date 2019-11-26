<?php
session_start();
echo $_SESSION['user']
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    <li><a href="create_account.php">Create Lecturer</a></li>
    <li><a href="create_student.php">Create Student</a></li>
    <li><a href="create_course.php">Create Course</a></li>
    <li><a href="assign_lecturers.php">Assign Lecturers</a></li>
    <li><a href="create_class.php">Create Class</a></li>
</ul>

</body>
</html>
