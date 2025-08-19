<?php
require 'connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM todos WHERE id=$id";

$todos = mysqli_query($connection, $sql2);

$connection->close();

?>