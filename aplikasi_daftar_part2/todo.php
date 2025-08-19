<?php
$title = "Aplikasi data todo | HOME";
include "./temp/header.php";
include "./db/data.php";

$no = 1;
?>

<h1>To Do</h1>
<a href = "http://localhost/aplikasi_daftar_part2/create-todo.php">Add To Do</a>


<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>To Do List</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($todos as $todo):?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $todo['todo_name'] ?></td>
            <td>
                <a href = "http://localhost/aplikasi_daftar_part2/db/delete-todo.php?id=<?= $todo['id'] ?>">Delete</a>
                <a href = "http://localhost/aplikasi_daftar_part2/update-todo.php?id=<?= $todo['id'] ?>">Update</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>