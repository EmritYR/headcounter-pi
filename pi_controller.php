<?php
function getPDO()
{
    try {
        $myPDO = new PDO('pgsql:host=ec2-54-221-195-148.compute-1.amazonaws.com; port=5432; dbname=d3bfq4clh09b21 sslmode=require', 'qqolorykjuhkzg', 'aaf3efea7997f8b655d1b34dcffd6c3c5664eafdc4fb58591adef8df6b780a15');
        return $myPDO;
    } catch (PDOException $e) {
        echo "Failed: " . $e->getMessage();
        return null;
    }
}
function main() {
    if (isset($_POST['start_scanning'])) {
        exec('python3 scripts/startScanning.py');
        echo "Start Scanning";
    }
    if (isset($_POST['stop_scanning'])) {
        exec('sudo -u root -S touch stop_scanning 2>&1');
        echo "Stop Scanning";
    }
}

main();