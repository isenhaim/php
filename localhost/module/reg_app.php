<?php
include 'db.php';

    $mysqli = db_connect();

    // Form
    $id = $_POST['id'];
    $fn = htmlspecialchars($_POST['fn']);
    $ln = htmlspecialchars($_POST['ln']);
    $mn = htmlspecialchars($_POST['mn']);
    $place_birth = htmlspecialchars($_POST['place_birth']);
    $date_birth = htmlspecialchars($_POST['date_birth']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $about = htmlspecialchars($_POST['about']);


    $query = "INSERT INTO application (fn, ln, mn, place_birth, date_birth, email, phone, about) VALUES ('$fn', '$ln','$mn', '$place_birth', '$date_birth', '$email', '$phone', '$about')";
    $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    $redirect_url = '/index.html';

    $mysqli->close();

    header('HTTP/1.1 200 OK');
    header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);
    
    exit;

?>