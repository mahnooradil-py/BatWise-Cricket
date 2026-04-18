<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Character encoding for proper text display -->
    <meta charset="UTF-8">

    <!-- Ensures the page is responsive on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Page title shown in the browser tab -->
    <title>BatWise Cricket - Home</title>

    <!-- Link to external CSS stylesheet -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <!-- Header section containing logo and site title -->
    <header>
        <!-- Logo links back to the home page -->
        <a href="index.php">
            <img src="images/cricket-logo.png" width="75" height="75" alt="BatWise Cricket Logo">
        </a>

        <!-- Main heading of the website -->
        <h1>BatWise Cricket</h1>
    </header>

    <!-- Navigation menu for linking all main pages -->
    <nav>
        <ul>
            <!-- Each list item represents a navigation link -->
            <li><a href="index.php">Home</a></li>
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Member Login</a></li>
        </ul>
    </nav>

    <!-- Main content area of the page -->

    <main>

        <section>
            <h2>Available Cricket Bats</h2>

            <article>
                <h3>GM Diamond 404 Bat</h3>
                <img src="images/bat1.png" alt="GM Diamond Cricket Bat" width="100">
                <p>High-quality English willow bat suitable for advanced players.</p>
            </article>

            <article>
                <h3>Kookaburra Kahuna Bat</h3>
                <img src="images/bat2.jpg" alt="Kookaburra Kahuna Cricket Bat" width="150">
                <p>Well-balanced bat designed for powerful stroke play.</p>
            </article>

            <article>
                <h3>Gray Nicolls Powerbow</h3>
                <img src="images/bat3.jpg" alt="Gray Nicolls Powerbow Bat" width="150">
                <p>Lightweight bat ideal for junior players.</p>
            </article>

        </section>

    </main>

    <!-- Footer included using PHP for reuse across all pages -->
    <?php require_once 'project_footer.php'; ?>

</body>

</html>