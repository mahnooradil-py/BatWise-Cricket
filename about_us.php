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

    <main>

        <!-- Company background -->
        <section>
            <h2>Who We Are</h2>
            <p>
                BatWise Cricket is an independent online platform focused entirely on cricket bats.
                The website was created to provide clear and reliable information for players who want
                to choose the right bat for their needs.
            </p>
        </section>

        <!-- Story/purpose -->
        <section>
            <h2>Our Story</h2>
            <p>
                BatWise Cricket began as a small project by cricket enthusiasts who recognised that many
                players struggle to understand the differences between bat sizes, weights, and materials.
                Over time, it developed into a dedicated resource for both beginners and experienced players.
            </p>
        </section>

        <!-- Expertise -->
        <section>
            <h2>Our Knowledge</h2>
            <p>
                We focus specifically on cricket bats, including junior and adult models, and provide
                information about key features such as English willow, bat profiles, and pick-up.
                This specialised approach allows us to offer more detailed guidance than general sports shops.
            </p>
        </section>

        <!-- Purpose -->
        <section>
            <h2>Our Aim</h2>
            <p>
                Our aim is to make it easier for players to select the correct bat, improve their performance,
                and enjoy the game. We also provide a system where members can manage and update bat listings.
            </p>
        </section>

    </main>

    <!-- Footer included using PHP for reuse across all pages -->
    <?php require_once 'project_footer.php'; ?>

</body>

</html>