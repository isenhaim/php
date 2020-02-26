<?php
include 'db.php';
    $mysqli = db_connect();

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $query = "SELECT app FROM users where login='$login' and password='$password'";

    $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    $row = $result->fetch_assoc();
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['username'] = $login;
    }
}

if (isset($_SESSION['username'])) {
    $login = $_SESSION['username'];
    $redirect_url = '/list.php';
} else {
    $redirect_url = '/reg.php';
}

$mysqli->close();

header('HTTP/1.1 200 OK');
header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);
    
exit;
?>