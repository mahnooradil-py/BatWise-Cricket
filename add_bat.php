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

$message = "";

/* Check if the form has been submitted */
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    /* Get and clean form data */
    $name = trim($_POST["name"]);
    $brand = trim($_POST["brand"]);
    $category = trim($_POST["category"]);
    $price = trim($_POST["price"]);
    $bat_size = trim($_POST["bat_size"]);
    $material = trim($_POST["material"]);
    $description = trim($_POST["description"]);
    //
    /* Temporary default image name */
    /* $image_name = "default.png"; */

    /* Get uploaded image details */
    $image_name = basename($_FILES["image"]["name"]);
    $image_tmp = $_FILES["image"]["tmp_name"];

    $target_path = "uploads/" . $image_name;
    if (empty($image_name)) {
        $message = "No image was selected.";
    }
}

if (move_uploaded_file($image_tmp, $target_path)) {
    /* Prepare SQL statement */
    $sql = "INSERT INTO bats (name, brand, category, price, bat_size, material, description, image)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param(

            "sssdssss",
            $name,
            $brand,
            $category,
            $price,
            $bat_size,
            $material,
            $description,
            $image_name
        );

        if ($stmt->execute()) {
            $message = "New cricket bat added successfully.";
        } else {
            $message = "Database error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        $message = "SQL prepare failed: " . $conn->error;
    }
} else {
    $message = "Image upload failed. Error code: " . $_FILES["image"]["error"];
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
    <title>BatWise Cricket - Add Bat</title>

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
            <h2>Add a New Cricket Bat</h2>

            <p>Use the form below to add a new cricket bat to the catalogue.</p>
        </section>

        <section>
            <?php if (!empty($message)) : ?>
                <p><?php echo htmlspecialchars($message); ?></p>
            <?php endif; ?>

            <!--This form is sending a file as well, not just text-->
            <form method="post" action="add_bat.php" enctype="multipart/form-data">
                <label for="name">Bat Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="brand">Brand:</label>
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

                <label for="image">Bat Image:</label>
                <input type="file" id="image" name="image" accept=".jpg,.jpeg,.png,.webp" required>

                <button type="submit">Add Bat</button>
            </form>
        </section>

    </main>
    <?php require_once 'project_footer.php'; ?>

</body>

</html>