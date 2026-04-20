<?php
/* Store confirmation message */
$feedback_message = "";

/* Check if the contact form has been submitted */
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    /* Basic server-side validation */
    if (!empty($name) && !empty($email) && !empty($message)) {
        $feedback_message = "Thank you for your message. We will respond as soon as possible.";
    } else {
        $feedback_message = "Please complete all fields before submitting the form.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BatWise Cricket - Contact</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <!-- Header -->
    <header class="top-bar">
        <h1> <a href="index.php">
                <img src="images/cricket-logo.png" width="75" height="75" alt="BatWise Cricket Logo">
            </a>
            BatWise Cricket</h1>

        <!-- Navigation -->
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Member Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>

        <section class="content-card">
            <h2>Contact Us</h2>
            <p>
                If you have any questions about our cricket bats, please fill in the form below.
                We will respond as soon as possible.
            </p>
        </section>

        <!-- Contact form -->
        <section class="contact-container">

            <div class="contact-form">
                <?php if (!empty($feedback_message)) : ?>
                    <p><strong><?php echo htmlspecialchars($feedback_message); ?></strong></p>
                <?php endif; ?>

                <form method="post" action="contact.php">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required minlength="2">

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="6" required minlength="10"></textarea>

                    <button type="submit">Send</button>
                </form>
            </div>

            <div class="contact-info">
                <h2>Other Ways to Contact Us</h2>
                <p>Email: support@batwisecricket.co.uk</p>
                <p>Phone: 097634 5672290</p>
                <p>Location: London, United Kingdom</p>
            </div>

        </section>

    </main>

    <!-- Footer -->
    <?php require_once 'project_footer.php'; ?>

</body>

</html>