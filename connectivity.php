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

function login()
{
    session_start();

    $username = $_POST['id'];
//    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    try {
        $myPDO = getPDO();
        $result = $myPDO->query("SELECT * FROM lecturer");

        while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
            if ($row['lecturer_id'] == $username and password_verify($_POST['password'], $row['password_hash'])) {
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

function logout()
{
    session_start();
    unset($_SESSION["username"]);
    session_destroy();
    header("Location: index.php");
}

function create_account()
{
    session_start();

    try {
        $lecturer_id = $_POST['lecturer_id'];
        $name = $_POST['name'];
        $img_url = $_POST['img_url'];
        $password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $myPDO = getPDO();
        $sql = 'INSERT INTO lecturer(lecturer_id, name, img_url, password_hash) VALUES(:lecturer_id, :name, :img_url, :password_hash)';
        $stmt = $myPDO->prepare($sql);

        $stmt->bindValue(':lecturer_id', $lecturer_id);
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':img_url', $img_url);
        $stmt->bindValue(':password_hash', $password_hash);
        $stmt->execute();

        header("Location: success.php");
    } catch (PDOException $e) {
        echo "Failed: " . $e->getMessage();
        header("Location: fail.php");
    }
}

function getClassId(){
    session_start();
    $myPDO = getPDO();
    $result = $myPDO->query("select * from class where id = ? order by id desc limit 1 ");
    while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
        $_SESSION['current_class'] = $row['id'];
    }
}

function create_class()
{
    session_start();
    try {
        $type = $_POST['type'];
        $course_id = $_POST['course_id'];
        $lecturer_id = $_POST['lecturer_id'];
        $location = $_POST['location'];
        $duration = $_POST['duration'];
        $start_time = new DateTime();

        $myPDO = getPDO();
        $sql = 'INSERT INTO class(type, course_id, lecturer_id, location, start_time, duration) VALUES(:type, :course_id, :lecturer_id, :location, :start_time, :duration)';
        $stmt = $myPDO->prepare($sql);

        $stmt->bindValue(':type', $type);
        $stmt->bindValue(':course_id', $course_id);
        $stmt->bindValue(':lecturer_id', $lecturer_id);
        $stmt->bindValue(':location', $location);
        $stmt->bindValue(':start_time', $start_time->getTimestamp());
        $stmt->bindValue(':duration', $duration);
        $stmt->execute();

//        getClassId();
    echo 'test';
        header("Location: logging.php");
    } catch (PDOException $e) {
        echo "Failed: " . $e->getMessage();
    }
}

function create_course()
{
    session_start();
    try {
        $course_id = $_POST['course_id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $img_url = $_POST['img_url'];

        $myPDO = getPDO();
        $sql = 'INSERT INTO course(course_id, name, description, img_url) VALUES(:course_id, :name, :description, :img_url)';
        $stmt = $myPDO->prepare($sql);

        $stmt->bindValue(':course_id', $course_id);
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':description', $description);
        $stmt->bindValue(':img_url', $img_url);
        $stmt->execute();

        header("Location: success.php");
    } catch (PDOException $e) {
        echo "Failed: " . $e->getMessage();
    }
}

function assign_lecturers()
{
    session_start();

    try {
        $course_id = $_POST['course_id'];
        $lecturer_id = $_POST['lecturer_id'];

        $myPDO = getPDO();
        $sql = 'INSERT INTO course_lecturers(course_id, lecturer_id) VALUES(:course_id, :lecturer_id)';
        $stmt = $myPDO->prepare($sql);

        $stmt->bindValue(':course_id', $course_id);
        $stmt->bindValue(':lecturer_id', $lecturer_id);
        $stmt->execute();

        header("Location: success.php");
    } catch (PDOException $e) {
        echo "Failed: " . $e->getMessage();
    }
}

function main()
{
    date_default_timezone_set('America/Port_of_Spain');

    if (isset($_POST['login'])) {
        login();
    }
    if (isset($_POST['logout'])) {
        logout();
    }
    if (isset($_POST['create_account'])) {
        create_account();
    }
    if (isset($_POST['create_course'])) {
        create_course();
    }
    if (isset($_POST['create_class'])) {
        create_class();
    }
    if (isset($_POST['assign_lecturer'])) {
        assign_lecturers();
    }
}

main();
?>