<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BatWise Cricket - Member Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <!-- Header -->
    <header>
        <a href="index.php">
            <img src="images/cricket-logo.png" width="75" height="75" alt="BatWise Cricket Logo">
        </a>
        <h1>BatWise Cricket</h1>
    </header>

    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Member Login</a></li>
        </ul>
    </nav>

    <!-- Main content -->
    <main>

        <section>
            <h2>Member Login</h2>
            <p>
                Registered members can log in to manage cricket bat listings and update stock information.
            </p>
        </section>

        <!-- Login form -->
        <section>
            <form>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Login</button>
            </form>
        </section>

    </main>

    <!-- Footer -->
    <?php require_once 'project_footer.php'; ?>

</body>

</html>