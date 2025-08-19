<?php

require 'connection.php';

$fullname = $_POST["fullname"];
$gender = $_POST["gender"];
$class = $_POST["class"];
$major = $_POST["major"];

$sql = "INSERT INTO students(
fullname,
gender,
class,
major
)
VALUES('$fullname', '$gender', '$class', '$major')";

if($connection->query($sql)){
    header("Location: http://localhost/aplikasi_daftar_part2/index.php");
    $connection->close();
    die();
}

echo "ERROR" . $sql . "<br/>" . $connection->error;
$connection->close();
