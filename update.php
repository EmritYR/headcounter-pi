<?php
session_start();
if($_SESSION['user'] != 'admin')
    header('Location: index.php');

$output = exec('sudo -u root -S git pull https://StallionsProject:qwerty.12stallions@github.com/EmritYR/headcounter-pi 2>&1');
echo "<pre>$output</pre>";
?>