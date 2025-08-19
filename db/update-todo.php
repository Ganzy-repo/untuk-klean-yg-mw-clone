<?php

require 'connection.php';


$id = $_POST["id"];
$todo_name = htmlspecialchars($_POST["todo_name"]);

$sql = "UPDATE books SET todo_name='$todo_name', WHERE id=$id";

if($connection->query($sq2)){
    header("Location: http://localhost/aplikasi_daftar_part2/todo.php");
    $connection->close();
    die();
}

echo "ERROR" . $sql . "<br/>" . $connection->error;
$connection->close();