<?php
function main() {
    if (isset($_POST['start_scanning'])) {
        exec('python3 scripts/startScanning.py 2>&1');
    }
    if (isset($_POST['stop_scanning'])) {
        exec('sudo -u root -S touch scripts/stop_scanning 2>&1');
    }
}

main();