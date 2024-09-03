<!DOCTYPE html>
<html lang="en">

<head>
    <title>Error</title>
</head>

<body>
    <div class="container">
        <h2>An Error Occurred</h2>
        <p>Sorry, something went wrong. Please try again later.</p>
        <p><?php echo htmlspecialchars($_GET['message']); ?></p>
        <a href="/index.html">Back to Login Page</a>
    </div>
</body>

</html>