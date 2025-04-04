<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars(trim($_POST["firstName"]));
    $lastName = htmlspecialchars(trim($_POST["lastName"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $phone = htmlspecialchars(trim($_POST["phonenumber"]));
    $password = trim($_POST["password"]);
    $confirmPassword = trim($_POST["confirmPassword"]);

    $errors = [];

    if (empty($firstName)) $errors[] = "First name is required.";
    if (empty($lastName)) $errors[] = "Last name is required.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format.";
    if (!preg_match("/^\d{10}$/", $phone)) $errors[] = "Phone number must be 10 digits.";
    if (strlen($password) < 6) $errors[] = "Password must be at least 6 characters.";
    if ($password !== $confirmPassword) $errors[] = "Passwords do not match.";

    if (!empty($errors)) {
        echo "<h2 style='color: red;'>Registration Failed:</h2><ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
        echo "<a href='../register.html'>← Go Back</a>";
    } else {
        echo "<h2 style='color: green;'>Registration Successful!</h2>";
        echo "<p>Welcome, <strong>$firstName $lastName</strong>!</p>";
        echo "<a href='../register.html'>← Go Back</a>";
    }
} else {
    header("Location: ../register.html");
    exit;
}
?>
