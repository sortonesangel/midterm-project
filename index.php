<?php
// Include database connection
include('assets/db/config.php');

// Start session
session_start();

// Check if the form is submitted for login
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email']) && isset($_POST['password'])) {
    // Sanitize and retrieve user input
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Validate the input fields
    if (empty($email) || empty($password)) {
        echo "Please fill out all required fields.";
        exit;
    }

    // Check if email exists in the database
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Store user session details
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];

            // Redirect to the shop page after successful login
            header("Location: shop.php");
            exit;
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "Email not found.";
    }

    // Close statement
    $stmt->close();
}

// Check if the form is submitted for registration
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
    // Get user input and sanitize
    $firstName = htmlspecialchars(trim($_POST['firstName']));
    $lastName = htmlspecialchars(trim($_POST['lastName']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $confirmPassword = htmlspecialchars(trim($_POST['confirm_password']));

    // Validate required fields
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword)) {
        echo "Please fill out all required fields.";
        exit;
    }

    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
        exit;
    }

    // Check if email already exists
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email is already registered.";
        exit;
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

    if ($stmt->execute()) {
        echo "Registration successful! You can now <a href='index.php?form=login'>login</a>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>

<?php
// Check the URL parameter to determine which form to display
if (!isset($_GET['form']) || $_GET['form'] == 'login') :
?>

<!-- Login Form -->
<div class="wrapper">
    <form method="POST" action="index.php">
        <h2>Login</h2>
        <div class="input-field">
            <input type="email" name="email" required>
            <label>Enter your email</label>
        </div>
        <div class="input-field">
            <input type="password" name="password" required>
            <label>Enter your password</label>
        </div>
        <div class="forget">
            <label for="remember">
                <input type="checkbox" id="remember">
                <p>Remember me</p>
            </label>
            <a href="#">Forgot password?</a>
        </div>
        <button type="submit">Log In</button>
        <div class="register">
            <p>Don't have an account? <a href="index.php?form=register">Register</a></p>
        </div>
    </form>
</div>

<?php
elseif ($_GET['form'] == 'register') :
?>

<!-- Register Form -->
<div class="wrapper">
    <form method="POST" action="index.php">
        <h2>Register</h2>
        <div class="input-field">
            <input type="text" name="firstName" required>
            <label>First Name</label>
        </div>
        <div class="input-field">
            <input type="text" name="lastName" required>
            <label>Last Name</label>
        </div>
        <div class="input-field">
            <input type="email" name="email" required>
            <label>Enter your email</label>
        </div>
        <div class="input-field">
            <input type="password" name="password" required>
            <label>Enter your password</label>
        </div>
        <div class="input-field">
            <input type="password" name="confirm_password" required>
            <label>Confirm Password</label>
        </div>
        <div class="forget">
            <label for="remember">
                <input type="checkbox" id="remember">
                <p>Remember me</p>
            </label>
            <a href="#">Forgot password?</a>
        </div>
        <button type="submit">Register</button>
        <div class="register">
            <p>I have an account? <a href="index.php?form=login">Login</a></p>
        </div>
    </form>
</div>

<?php endif; ?>

</body>
</html>
