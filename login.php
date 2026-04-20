<?php
session_start();
require_once 'db.php';

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($stmt) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user["password"])) {
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["username"] = $user["username"];

                header("Location: members.php");
                exit();
            } else {
                $error_message = "Incorrect username or password.";
            }
        } else {
            $error_message = "Incorrect username or password.";
        }

        $stmt->close();
    } else {
        $error_message = "SQL prepare failed" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BatWise Cricket - Member Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <header class="top-bar">

        <img src="images/cricket-logo.png" width="75" height="75" alt="BatWise Cricket Logo">
        <h1>
            Batwise Cricket
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
            <h2>Member Login</h2>
            <p>
                Registerd members can log in to access the member's area and manage the cricket bat catalouge.
            </p>
        </section>

        <section class="content-card">
            <?php if (!empty($error_message)) : ?>
                <p class="error-message"><strong><?php echo htmlspecialchars($error_message); ?></strong></p>
            <?php endif; ?>

            <?php if (isset($_GET['registered']) && $_GET['registered'] === 'success') : ?>
                <p class="success-message">Registration successful. You can now log in.</p>
            <?php endif; ?>
            
            <form method="post" action="login.php">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Login</button>
            </form>
        </section>

    </main>

    <?php require_once 'project_footer.php'; ?>

</body>

</html>