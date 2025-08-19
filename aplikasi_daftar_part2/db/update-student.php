<?php

require 'connection.php';


$id = $_POST["id"];
$fullname = htmlspecialchars($_POST["fullname"]);
$gender = $_POST["gender"];
$class = $_POST["class"];
$major = $_POST["major"];

$sql = "UPDATE students SET fullname='$fullname',
class='$class', major='$major', gender='$gender' WHERE id=$id";

if($connection->query($sql)){
    header("Location: http://localhost/aplikasi_daftar_part2/index.php");
    $connection->close();
    die();
}

echo "ERROR" . $sql . "<br/>" . $connection->error;
$connection->close();