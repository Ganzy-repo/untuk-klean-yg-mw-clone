<?php
$title = "Aplikasi Daftar Buku | HOME";
include "./temp/header.php";
include "./db/book.php";

$no = 1;
?>

<h1>List Data Buku</h1>
<a href = "http://localhost/aplikasi_daftar_part2/create-book.php">Add Book

</a>
<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Action</th>
        </tr>
    </thead>
     <tbody>
        <?php foreach($books as $book):?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $book['title'] ?></td>
            <td><?= $book['author'] ?></td>
            <td>
                <a href = "http://localhost/aplikasi_daftar_part2/db/delete-book.php?id=<?= $book['id'] ?>">Delete</a>
                <a href = "http://localhost/aplikasi_daftar_part2/update-book.php?id=<?= $book['id'] ?>">Update</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>