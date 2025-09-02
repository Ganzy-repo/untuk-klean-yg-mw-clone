<?php
session_start();
require 'connection.php';

$email = $_POST["email"];
$password = $_POST["password"];

if (
    $email == "" ||
    $password == ""
) {
    $_SESSION["VALIDATION_INPUT"] = "All fields must be filled";
    header("Location: http://localhost/aplikasi_daftar_part2/login.php");
    die;
}

$cekUser = "SELECT * FROM users WHERE email= '$email'";
$user = mysqli_query($connection, $cekUser);

if ($connection->query($cekUser)->num_rows == 0) {
    $_SESSION['VALIDATION_LOGIN'] = "Email or Passwod didn't exist!";
    header("Location: http://localhost/aplikasi_daftar_part2/login.php");
    $connection->close();
    die();
}

$auth = $user->fetch_assoc();

if (password_verify($password, $auth['password'])) {
    $_SESSION['LOGIN_SUCCESS'] = "Welcome!!";
    $_SESSION['is_login'] = true;
    header("Location: http://localhost/aplikasi_daftar_part2/student.php");
    $connection->close();
    die();
}
$_SESSION['LOGIN_FAILED'] = "Email or Password is wrong!";
header("Location: http://localhost/aplikasi_daftar_part2/login.php");
$connection->close();
die();
