<?php
$title = "Update TODO DATA";
include "./temp/header.php";
include "./db/detail-todo.php";

?>

<h1>Update Data Todo</h1>
<a href="http://localhost/aplikasi_daftar_part2/todo.php">Back</a>
<form
    style="margin-top: 10px;"
    method="POST"
    action="db/update-todo.php">

    <?php foreach ($todos as $todo) : ?>
        <input type="hidden" value="<?= $todo['id'] ?>" name='id'>
        <input
            value="<?= $todo['todo_name'] ?>"
            name="title"
            placeholder="To Do" /><br />
    <?php endforeach ?>
    <button type="submit">Submit</button>
</form>

</body>

</html>