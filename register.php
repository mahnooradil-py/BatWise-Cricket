<?php
ob_start(); // Start output buffering
require_once 'db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = trim($_POST["first_name"]);
    $last_name = trim($_POST["last_name"]);
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $confrim_password = trim($_POST["confirm_password"]);

    if (empty($first_name) || empty($last_name) || empty($username) || empty($password) || empty($confirm_password)) {
        $message = "Please complete all fields.";
    } elseif ($password !== $confirm_password) {
        $message = "Passwords do not match";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (first_name, last_name, username, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ssss", $first_name, $last_name, $username, $hashed_password);

            if ($stmt->execute()) {
                header("Location: login.php");
                exit();
            } else {
                $message = "Username already exists or database error.";
            }

            $stmt->close();
        } else {
            $message = "SQL prepare failed: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BatWise Cricket - Register</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <header class="top-bar">
        <h1>
            <img src="images/cricket-logo.png" width="75" height="75" alt="BatWise Cricket Logo">
            BatWise Cricket
        </h1>

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

    <main>
        <section class="content-card">
            <h2>Create an Account</h2>
            <p>Register as a member to access the member’s area and manage the cricket bat catalogue.</p>
        </section>

        <section class="content-card">
            <?php if (!empty($message)) : ?>
                <p><strong><?php echo htmlspecialchars($message); ?></strong></p>
            <?php endif; ?>

            <form method="post" action="register.php">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required minlength="2">

                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required minlength="2">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required minlength="3">

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required minlength="6">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required minlength="6">
                <label>
                    <input type="checkbox" onclick="togglePassword()"> Show Password
                </label>
                <button type="submit">Register</button>
            </form>
        </section>
    </main>

    <?php require_once 'project_footer.php'; ?>
    <script>
        function togglePassword() {
            const pass = document.getElementById("password");
            const confirm = document.getElementById("confirm_password");

            pass.type = pass.type === "password" ? "text" : "password";
            confirm.type = confirm.type === "password" ? "text" : "password";
        }
    </script>

</body>

<?php ob_end_flush(); ?>

</html>