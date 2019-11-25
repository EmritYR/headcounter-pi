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
        system('python3 /var/www/html/headcounter/scripts/startScanning.py');
    }
    if (isset($_POST['stop_scanning'])) {
        system('sudo -u root -S touch /var/www/html/headcounter/scripts/stop_scanning');
    }
}

main();