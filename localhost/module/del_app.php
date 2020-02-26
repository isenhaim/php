<?php
include 'db.php';

$mysqli = db_connect();
    
$query = "DELETE FROM application where id = ".$_POST['del'];

$result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));

$redirect_url = '/list.php';

header('HTTP/1.1 200 OK');
header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);
?>