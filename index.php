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
    <link rel="stylesheet" href="css/horizontal.css">
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

        <!-- Introduction section -->
        <section>
            <h2>Welcome to BatWise Cricket</h2>
            <p>
                BatWise Cricket is a focused website dedicated to cricket bats for both junior and adult players.
                It provides clear guidance on bat types, sizes, and materials, alongside a catalogue of bats with images,
                descriptions, and availability status.
            </p>
        </section>

        <!-- Information about different types of bats -->
        <section>
            <h2>Junior and Adult Cricket Bats</h2>
            <p>
                Junior bats are lighter and shorter to support safe technique development, whilst adult bats vary in
                weight, profile, and pick-up to suit different playing styles. Choosing an appropriate bat helps players
                improve control, timing, and comfort at the crease.
            </p>
        </section>

        <!-- Features of the website -->
        <section>
            <h2>What You Can Do on This Website</h2>
            <ul>
                <li>Browse the cricket bat catalogue and check stock availability</li>
                <li>Compare bats by category, size, and material</li>
                <li>Members can log in to add new bats and update stock</li>
            </ul>
        </section>

        <!-- Call-to-action section guiding users -->
        <section>
            <p>
                Visit the <a href="shop.php">Shop</a> page to explore available bats.
                Registered members can <a href="login.php">log in</a> to manage the catalogue.
            </p>
        </section>

    </main>

    <!-- Footer included using PHP for reuse across all pages -->
    <?php require_once 'project_footer.php'; ?>

</body>

</html>