<?php
/* Start session to check login later */
session_start();

/* Redirect user if not logged in */
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

/* Include the database connection */
require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Character encoding -->
    <meta charset="UTF-8">

    <!-- Responsive layout -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Page title -->
    <title>Batwise Cricket - Add Bat</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!-- Header -->
    <header>
        <a href="index.php">
            <img src="images/cricket-logo.png" width="75" height="75" alt="BatWise Cricket Logo">
        </a>
        <h1>New Cricket Bat</h1>
    </header>
    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="members.php">Members Area</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>


    <main>
        <section>
            <h2>Add a New Cricket Baat</h2>

            <p>Use the form below to add a new cricket bat to the catalogue.</p>
        </section>

        <section>
            <form method="post" action="add_bat.php">
                <label for="name">Bat Name:</label>
                <input type="text" id="name" name="name" required>

                label for="brand">Brand:</label>
                <input type="text" id="brand" name="brand" required>

                <label for="category">Category:</label>
                <input type="text" id="category" name="category" required>

                <label for="price">Price:</label>
                <input type="number" id="price" name="price" step="0.01" required>

                <label for="bat_size">Bat Size:</label>
                <input type="text" id="bat_size" name="bat_size" required>

                <label for="material">Material:</label>
                <input type="text" id="material" name="material" required>

                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="5" required></textarea>
                <button type="submit">Add Bat</button>
            </form>
        </section>

    </main>

</body>

</html>