<?php
function main()
{
    if (isset($_POST['start_scanning'])) {
        $cmd = 'sudo -u root -S python3 scripts/main.py ' . $_SESSION['current_class'] . ' & 2>&1';
        exec($cmd);
        header('Location: logging.php');
    }
    if (isset($_POST['stop_scanning'])) {
        exec('sudo -u root -S touch scripts/stop_scanning 2>&1');
        header('Location: logging.php');
    }
}

main();