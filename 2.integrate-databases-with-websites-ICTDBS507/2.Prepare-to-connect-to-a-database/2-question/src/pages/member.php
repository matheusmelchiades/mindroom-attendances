<?php
include '../includes/functions.php';
include '../includes/database.php';

$db = createDatabaseConnection();

$id = isset($_GET['id']) ? intval($_GET['id']) : null;

$member = findOneMember($db, $id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($member['name']); ?> - Revolutionary Army</title>
    <link rel="stylesheet" href="../css/member.styles.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php if ($member): ?>
            <div class="member-details">
                <img src="../<?php echo htmlspecialchars($member['avatar']); ?>"
                    alt="<?php echo htmlspecialchars($member['name']); ?>" class="avatar">

                <h1><?php echo htmlspecialchars($member['name']); ?></h1>

                <p><strong>Age:</strong> <?php echo htmlspecialchars($member['age']); ?></p>
                <p><strong>Epithet</strong> <?php echo htmlspecialchars($member['epithet']); ?></p>
                <p><strong>Bio:</strong> <?php echo nl2br(htmlspecialchars($member['bio'])); ?></p>
            </div>
        <?php else: ?>
            <p>Member not found.</p>
        <?php endif; ?>
    </main>

    <footer>
        <p>&copy; 2024 Revolutionary Army. All rights reserved.</p>
    </footer>
</body>

</html>