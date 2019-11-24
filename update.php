<?php
session_start();
// Testing remote update feature

if($_SESSION['user'] != 'admin')
    header('Location: index.php');

$cmd = 'git pull https://StallionsProject:qwerty.12stallions@github.com/EmritYR/headcounter-pi';
$output = shell_exec($cmd);
echo "<pre>$output</pre>";
?>