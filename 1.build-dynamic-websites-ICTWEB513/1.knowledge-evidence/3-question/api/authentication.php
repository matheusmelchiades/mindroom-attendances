<?php
session_start();

$authenticated_username = "test";
$authenticated_password = "test";

$username = $_SESSION['username'];
$password = $_SESSION['password'];

sleep(3);

if ($username === $authenticated_username && $password === $authenticated_password) {
    $_SESSION['loggedin'] = true;

    unset($_SESSION['password']);

    exit(header("Location: /api/success.php"));
} else {
    $_SESSION['loggedin'] = false;
    exit(header("Location: /api/error.php"));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth</title>
</head>
<body>
    <h1>Verifying Credentials...</h1>
</body>
</html>