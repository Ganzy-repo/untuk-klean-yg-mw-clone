<?php
require 'connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM books WHERE id=$id";

if($connection->query($sql)){
    header("Location: http://localhost/aplikasi_daftar_part2/book.php");
    $connection->close();
    die();
}

echo "ERROR" . $sql . "</br>" . $connection->error;
$connection->close();

?>