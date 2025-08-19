<?php
session_start();
require 'connection.php';

$email = $_POST["email"];
$password = $_POST["password"];

if(
    $email == "" ||
    $password == ""
    ) {
    $_SESSION ["VALIDATION_INPUT"] = "All fields must be filled";
    header("Location: http://localhost/aplikasi_daftar_part2/login.php");
    return;
    }

$cekUser = "SELECT * FROM users WHERE email= '$email'";
$user = $connection->query($cekUser);

if ($user->num_rows == 0) {
    $_SESSION['VALIDATION_LOGIN'] = "Email or Password is worng!";
    header("Location: http://localhost/aplikasi_daftar_part2/login.php");
    $connection->close();
    die();
}

$password_hashed = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT FROM users (
    email,
    password )
    VALUES ('$email', '$password_hashed')";


    if ($connection->query($sql)->num_rows > 0) {
        $_SESSION['LOGIN_SUCCESS'] = "Welcome!!";
        header("Location: http://localhost/aplikasi_daftar_part2/student.php");
        $connection->close();
        die();
    }

echo "ERROR" . $sql . "<br/>" . $connection->error;
    $connection->close();