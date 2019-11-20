<?php
function SignIn()
{
    session_start();

    $username = $_POST['user'];
    $password = hash('sha256', $_POST['pass']);

    try {
        $myPDO = new PDO('pgsql:host=ec2-54-225-106-93.compute-1.amazonaws.com; port=5432; dbname=dcgqbc3e7j5gh0 sslmode=require', 'bczntonffplpss', '6e8a86add2b8b97e354e343b49e3dab4990ad633d2adcc1f85c1635a2ebf1dbe');
        $result = $myPDO->query("SELECT * FROM users");

        while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
            if ($row['username'] == $username and $row['password'] == $password) {
                echo "found user";
                $_SESSION['username'] = $row['password'];
                $_SESSION['empid'] = $row['employee_id'];
                $_SESSION['user'] = $row['username'];
                $_SESSION['fname'] = $row['fname'];
                $_SESSION['lname'] = $row['lname'];
                echo 'logged in';
            }
        }

        if (empty($_SESSION['username'])) {
            header("Location: login.php");
        } else {
            if ($_SESSION['fname'] == 'admin')
                header("Location: admin_index.php");
            else
                header("Location: home.php");
        }
    } catch (PDOException $e) {
        echo "Failed: " . $e->getMessage();
    }
}

function Logout() {
    session_start();

    unset($_SESSION["username"]);
    session_destroy();
    header("Location: index.php");
}
?>