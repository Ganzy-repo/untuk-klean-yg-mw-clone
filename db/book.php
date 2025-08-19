<?php
require 'connection.php';

$books = [];
$sql = "SELECT * FROM books";

$books = mysqli_query($connection, $sql);

$connection->close();
?>