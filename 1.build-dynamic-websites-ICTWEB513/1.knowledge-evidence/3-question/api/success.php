<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: /index.html");
    exit();
} else {
    sleep(5);
    header("Location: /home.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Successful</title>
</head>

<body>
    <div class="container">
        <h2>Login Successful!</h2>
        <p>Welcome to Sport Club Internacional's official page.</p>
        <p>You will be redirected to the home page in 5 seconds.</p>
        <a href="home.html">Click here if you are not redirected automatically.</a>
    </div>
</body>

</html>