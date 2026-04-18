<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BatWise Cricket - Contact</title>
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

    <!-- Main Content -->
    <main>

        <section>
            <h2>Contact Us</h2>
            <p>
                If you have any questions about our cricket bats, please fill in the form below.
                We will respond as soon as possible.
            </p>
        </section>

        <!-- Contact form -->
        <section>
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Send</button>
            </form>
        </section>

    </main>

    <!-- Footer -->
    <?php require_once 'project_footer.php'; ?>

</body>

</html>