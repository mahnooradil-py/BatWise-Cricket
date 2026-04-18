<?php
session_start();

/* Redirect if user is not logged in */
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Members Area</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h2>Members Area</h2>

    <p>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>.</p>

    <p>You are successfully logged in.</p>

    <a href="logout.php">Logout</a>

</body>

</html>