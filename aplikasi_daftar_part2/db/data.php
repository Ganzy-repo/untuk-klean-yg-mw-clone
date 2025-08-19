<?php
require 'connection.php';

$students = [];
$sql = "SELECT * FROM students";

$books = [];
$sql1 = "SELECT * FROM books";

$todos = [];
$sql2 = "SELECT * FROM todos";

$students = mysqli_query($connection, $sql);

$books = mysqli_query($connection, $sql1);

$todos = mysqli_query($connection, $sql2);

$connection->close();
?>