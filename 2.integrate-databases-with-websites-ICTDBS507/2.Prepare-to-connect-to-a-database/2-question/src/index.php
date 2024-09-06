<?php
include 'includes/functions.php';
include 'includes/database.php';

$dbconnect = createDatabaseConnection();
$members = findAllMembers($dbconnect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revolutionary Army</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>Revolutionary Army!</h1>

    <?php if ($members): ?>
        <?php foreach ($members as $member): ?>
            <li>
                <img src="<?php echo htmlspecialchars($member['avatar']); ?>"
                    alt="<?php echo htmlspecialchars($member['name']); ?>">

                <a href="pages/member.php?id=<?php echo htmlspecialchars($member['id']); ?>">

                    <?php echo htmlspecialchars($member['name']); ?>
                </a>
            </li>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Member not found.</p>
    <?php endif; ?>
</body>

</html>