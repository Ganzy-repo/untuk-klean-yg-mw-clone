<?php
$title = "Update BOOK DATA";
include "./temp/header.php";
include "./db/detail-book.php";

?>

<h1>Update Data Buku</h1>
<a href="http://localhost/aplikasi_daftar_part2/book.php">Back</a>
<form
    style="margin-top: 10px;"
    method="POST"
    action="db/update-book.php">

    <?php foreach ($books as $book) : ?>
        <input type="hidden" value="<?= $book['id'] ?>" name='id'>
        <input
            value="<?= $book['title'] ?>"
            name="title"
            placeholder="Title" /><br />
            <input
            value="<?= $book['author'] ?>"
            name="author"
            placeholder="Title" /><br />
    <?php endforeach ?>
    <button type="submit">Submit</button>
</form>

</body>

</html>