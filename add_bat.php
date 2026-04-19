<?php
/* Start session to check login later */
session_start();

/* Redirect user if not logged in */
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Character encoding -->
    <meta charset="UTF-8">

    <!-- Responsive layout -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Page title -->
    <title>Add Bat</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <header>
        <h1>Add New Cricket Bat</h1>
    </header>

    <main>
        <p>This page will allow members to add a new cricket bat.</p>
    </main>

</body>

</html>