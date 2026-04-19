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

    <!-- Character encoding -->
    <meta charset="UTF-8">

    <!-- Responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Page title -->
    <title>Batwise Cricket - Members Area</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <!-- Header -->
    <header>
        <a href="index.php"></a>
        <img src="images/cricket-logo.png" width="75" height="75" alt="BatWise Cricket Logo">
        </a>

        <h1>Batwise Cricket</h1>
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

    <!-- Main content -->
    <main>

        <!-- Welcome section -->
        <section>
            <h2>Members Area</h2>

            <p>Welcome, <strong><?php echo htmlspecialchars($_SESSION["username"]); ?></strong>.
            </p>
        </section>


        <!-- Actions section -->
        <section>
            <h2>Manage Catalogue</h2>

            <ul>
                <li>
                    <a href="add_bat.php">Add a New Cricket Bat</a>
                </li>

                <li>
                    <a href="shop.php">View All Bats</a>
                </li>
            </ul>
        </section>

        <!-- Information section -->
        <section>
            <h2>Information</h2>

            <p>
                This members area allows authorised users to add new cricket bats to the system,
                including images and detailed descriptions. All entries are stored in the database
                and displayed on the shop page.
            </p>
        </section>

    </main>

    <!--  <p>You are successfully logged in.</p>

            <a href="logout.php">Logout</a> -->

</body>

</html>