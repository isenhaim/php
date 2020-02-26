<?php
include 'db.php';

$mysqli = db_connect();

$id = $_POST['id'];
$fn = htmlspecialchars($_POST['fn']);
$ln = htmlspecialchars($_POST['ln']);
$mn = htmlspecialchars($_POST['mn']);
$place_birth = htmlspecialchars($_POST['place_birth']);
$date_birth = htmlspecialchars($_POST['date_birth']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$about = htmlspecialchars($_POST['about']);

$query = "UPDATE application SET fn='$fn', ln='$ln', mn='$mn', place_birth='$place_birth', date_birth='$date_birth', email='$email', phone='$phone', about='$about' WHERE id='$id'";
$result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
$redirect_url = '/list.php';

$mysqli->close();

header('HTTP/1.1 200 OK');
header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);

exit;

?>