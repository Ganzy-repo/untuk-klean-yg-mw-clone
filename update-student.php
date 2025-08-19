<?php
session_start();
$title = "Update STUDENT DATA";
include "./temp/header.php";
include "./db/detail-student.php";

if(isset($_SESSION["is_login"]) == false) {
    header("Location: http://localhost/aplikasi_daftar_part2/login.php");
    }

?>

<h1>Update Data Siswa</h1>
<a href="http://localhost/aplikasi_daftar_part2/student.php">Back</a>
<form
    style="margin-top: 10px;"
    method="POST"
    action="db/update-student.php">

    <?php foreach ($students as $student) : ?>
        <input type="hidden" value="<?= $student['id'] ?>" name='id'>
        <input
            value="<?= $student['fullname'] ?>"
            name="fullname"
            placeholder="Full Name" /><br />
        <select
            name="gender">
            <option
                <?= $student['gender'] == 'male' ?  "selected" : null ?>
                value="male">Male</option>
            <option
                <?= $student['gender'] == 'female' ?  "selected" : null ?>
                value="female">Female</option>
        </select><br />
        <select
            name="class">
            <option
                <?= $student['class'] == 'X' ?  "selected" : null ?>
                value="X">X</option>
            <option
                <?= $student['class'] == 'XI' ?  "selected" : null ?>
                value="XI">XI</option>
            <option
                <?= $student['class'] == 'XII' ?  "selected" : null ?>
                value="XII">XII</option>
        </select><br />
        <select
            name="major">
            <option
                <?= $student['major'] == 'PPLG' ?  "selected" : null ?>
                value="PPLG">PPLG</option>
            <option
                <?= $student['major'] == 'HR' ?  "selected" : null ?>
                value="HR">HR</option>
        </select><br />
    <?php endforeach ?>
    <button type="submit">Submit</button>
</form>

</body>

</html>