<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "library";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$accession_no = $_POST['accession_no'];
$title = $_POST['title'];
$author = $_POST['author'];
$edition = $_POST['edition'];
$publisher = $_POST['publisher'];

// Use prepared statement to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO books (accession_no, title, author, edition, publisher) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("issss", $accession_no, $title, $author, $edition, $publisher);

if ($stmt->execute()) {
    echo "<p>✅ Book added successfully!</p>";
} else {
    echo "<p>❌ Error: " . $stmt->error . "</p>";
}

$stmt->close();
$conn->close();

echo '<p><a href="index.php">🔙 Go back</a></p>';
?>
