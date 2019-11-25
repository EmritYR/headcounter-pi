<?php
echo shell_exec('pwd'). "<br>";
echo ("Making file") . "<br>";
echo exec('sudo -u root -S touch zzz 2>&1') . "<br>";
echo exec('whoami'). "<br>";
echo shell_exec('ls');
echo phpinfo();
?>
