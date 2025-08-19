<?php

require 'connection.php';

$todo_name = $_POST['todo_name'];

$sql = "INSERT INTO todos (todo_name)
VALUES ('$todo_name')";

if($connection->query($sql)){
    header("Location: http://localhost/aplikasi_daftar_part2/todo.php");
    $connection->close();
    die();
}