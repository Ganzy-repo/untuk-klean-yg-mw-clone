<?php

require 'connection.php';

$title = $_POST['title'];
$author = $_POST['author'];

$sql = "INSERT INTO books (title, author)
VALUES ('$title', '$author')";

if($connection->query($sql)){
    header("Location: http://localhost/aplikasi_daftar_part2/book.php");
    $connection->close();
    die();
}