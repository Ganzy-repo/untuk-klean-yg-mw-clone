<?php
session_start();
$title = "Aplikasi data siswa | HOME";
include "./temp/header.php";
include "./db/data.php";

$no = 1;

if(isset($_SESSION["is_login"]) == false) {
    header("Location: http://localhost/aplikasi_daftar_part2/login.php");
    }
?>

<h1>Aplikasi Data Siswa</h1>
<a href = "http://localhost/aplikasi_daftar_part2/create-student.php">Add Student</a>


<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Student Name</th>
            <th>Gender</th>
            <th>Class</th>
            <th>Major</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($students as $student):?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $student['fullname'] ?></td>
            <td><?= $student['gender'] ?></td>
            <td><?= $student['class'] ?></td>
            <td><?= $student['major'] ?></td>
            <td>
                <a href = "http://localhost/aplikasi_daftar_part2/db/delete-student.php?id=<?= $student['id'] ?>">Delete</a>
                <a href = "http://localhost/aplikasi_daftar_part2/update-student.php?id=<?= $student['id'] ?>">Update</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>