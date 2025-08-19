<?php
session_start();
$title = "CREATE STUDENT DATA";
include "./temp/header.php";

if(isset($_SESSION["is_login"]) == false) {
    header("Location: http://localhost/aplikasi_daftar_part2/login.php");
    }

?>

<h1>Tambah Data Siswa</h1>
<a href = "http://localhost/aplikasi_daftar_part2/student.php">Back</a>

<form 
style="margin-top: 10px;" 
method="POST"
action="./db/create.php">
    <input name="fullname" placeholder="Full Name"/><br/>
    <select name= "gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select><br/>
    <select name="class">
        <option value="X">X</option>
        <option value="XI">XI</option>
        <option value="XII">XII</option>
    </select><br/>
    <select name="major">
        <option value="PPLG">PPLG</option>
        <option value="HR">HR</option>
    </select><br/>
    <button type="submit">Submit</button>
</form>