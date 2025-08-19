<?php
$title = "CREATE TODO DATA";
include "./temp/header.php"?>

<h1>Todo</h1>
<a href = "http://localhost/aplikasi_daftar_part2/todo.php">Back</a>

<form 
style="margin-top: 10px;" 
method="POST"
action="./db/create-todo.php">
    <input name="todo" placeholder="To Do"/>
    <button type="submit">Submit</button>
</form>
</body>