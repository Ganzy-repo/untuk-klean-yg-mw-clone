<?php
$server = "localhost";
$db = "student_data_app";
$username = "root";
$password = "";

$connection = new mysqli(
    $server,
    $username,
    $password,
    $db
);
if($connection->error){
    die("ERROR CONNECTION" . $connection->error);
}

?>
