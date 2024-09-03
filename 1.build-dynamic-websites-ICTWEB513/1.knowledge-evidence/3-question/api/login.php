<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if ($username === "" || $password === "") {
    $error_message = "The username and password cannot be empty.";
    exit(header("Location: /index.html?error=$error_message"));
} else {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    exit(header("Location: /api/authentication.php"));
}
?>