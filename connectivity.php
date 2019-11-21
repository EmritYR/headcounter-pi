<?php
function login()
{
    session_start();

    $username = $_POST['id'];
    $password = hash('sha256', $_POST['password']);

    try {
        $myPDO = new PDO('pgsql:host=ec2-54-221-195-148.compute-1.amazonaws.com; port=5432; dbname=d3bfq4clh09b21 sslmode=require', 'qqolorykjuhkzg', 'aaf3efea7997f8b655d1b34dcffd6c3c5664eafdc4fb58591adef8df6b780a15');
        $result = $myPDO->query("SELECT * FROM lecturer");

        while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
            if ($row['lecturer_id'] == $username and $row['password_hash'] == $password) {
                echo "found user";
                $_SESSION['username'] = $row['password_hash'];
                $_SESSION['lecturer_id'] = $row['lecturer_id'];
                $_SESSION['user'] = $row['name'];
                $_SESSION['img_url'] = $row['img_url'];
                echo 'logged in';
            }
        }

        if (empty($_SESSION['username'])) {
            header("Location: account.php");
        } else {
            if ($_SESSION['user'] == 'admin')
                header("Location: admin_index.php");
            else
                header("Location: index.php");
        }
    } catch (PDOException $e) {
        echo "Failed: " . $e->getMessage();
    }
}

function logout() {
    session_start();
    unset($_SESSION["username"]);
    session_destroy();
    header("Location: index.php");
}
function main() {
    date_default_timezone_set ( 'America/Port_of_Spain');

    if (isset($_POST['login'])) {
        login();
    }
    if (isset($_POST['logout'])) {
        logout();
    }
}

main();
?>