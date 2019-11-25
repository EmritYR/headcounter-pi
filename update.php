<?php
session_start();
if($_SESSION['user'] != 'admin')
    header('Location: index.php');

$output = shell_exec('git pull https://StallionsProject:qwerty.12stallions@github.com/EmritYR/headcounter-pi');
echo "<pre>$output</pre>";
?>