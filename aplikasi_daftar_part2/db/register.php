<?php
session_start();
require 'connection.php';

$fullname = htmlspecialchars($_POST["fullname"]);
$email = $_POST["email"];
$password = $_POST["password"];
$password_confirmation = $_POST["password_confirmation"];

print_r($_POST);

if(
    $fullname == "" ||
    $email == ""  ||
    $password == "" ||
    $password_confirmation == ""
    ) {
    $_SESSION ["VALIDATION_INPUT"] = "All fields must be filled";
    header("Location: http://localhost/aplikasi_daftar_part2/register.php");
    return;
    }
if(
    $password != $password_confirmation
    ) {
    $_SESSION ["VALIDATION_PASSWORD"] = "Password doesn't match";
    header("Location: http://localhost/aplikasi_daftar_part2/register.php");
    return;
    }

$cekEmail = "SELECT email FROM users WHERE email= '$email'";

if ($connection->query($cekEmail)->num_rows > 0) {
        $_SESSION['VALIDATION_EMAIL_EXIST'] = "Email has been registered!";
        header("Location: http://localhost/aplikasi_daftar_part2/register.php");
        $connection->close();
        return;
    }


    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (
    fullname,
    email,
    password )
    VALUES ('$fullname', '$email', '$password_hashed')";


    if ($connection->query($sql)) {
        $_SESSION['REGISTER SUCCESS'] = "Register success ! Please login";
        header("Location: http://localhost/aplikasi_daftar_part2/login.php");
        $connection->close();
        die();
    }

    echo "ERROR" . $sql . "<br/>" . $connection->error;
    $connection->close();