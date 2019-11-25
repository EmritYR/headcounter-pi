<?php
session_start();
if($_SESSION['user'] != 'admin')
    header('Location: index.php');

$cmd = 'sh /var/www/html/headcounter/update.sh';
$output = shell_exec($cmd);
echo "<pre>$output</pre>";
?>