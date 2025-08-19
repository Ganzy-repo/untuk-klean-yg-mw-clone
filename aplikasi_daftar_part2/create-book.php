<?php
$title = "CREATE STUDENT DATA";
include "./temp/header.php"?>

<h1>Tambah Buku</h1>
<a href = "http://localhost/aplikasi_daftar_part2/book.php">Back</a>

<form 
style="margin-top: 10px;" 
method="POST"
action="./db/create-book.php">
    <input name="title" placeholder="Title"/>
    <input name="author" placeholder="Author"/>
    <button type="submit">Submit</button>
</form>
</body>