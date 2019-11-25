<?php
function main() {
    if (isset($_POST['start_scanning'])) {
        exec('python3 scripts/startScanning.py');
    }
    if (isset($_POST['stop_scanning'])) {
        exec('sudo -u root -S touch stop_scanning 2>&1');
    }
}

main();