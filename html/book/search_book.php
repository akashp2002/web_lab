<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "library";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$title = $_GET['title'];

$stmt = $conn->prepare("SELECT * FROM books WHERE title LIKE ?");
$searchTerm = "%$title%";
$stmt->bind_param("s", $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

echo "<h2>Search Results for: <i>" . htmlspecialchars($title) . "</i></h2>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='10' style='border-collapse: collapse; background: #fff;'>
            <tr style='background-color: #e6f2ff;'>
                <th>Accession No</th>
                <th>Title</th>
                <th>Author</th>
                <th>Edition</th>
                <th>Publisher</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['accession_no']}</td>
                <td>{$row['title']}</td>
                <td>{$row['author']}</td>
                <td>{$row['edition']}</td>
                <td>{$row['publisher']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No books found with title containing '<strong>" . htmlspecialchars($title) . "</strong>'</p>";
}

$stmt->close();
$conn->close();

echo '<p><a href="index.php">🔙 Back to Home</a></p>';
?>
