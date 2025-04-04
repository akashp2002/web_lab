<?php
$players = [
    "Virat Kohli",
    "Rohit Sharma",
    "Jasprit Bumrah",
    "KL Rahul",
    "Ravindra Jadeja"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Indian Cricket Players</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>List of Indian Cricket Players</h2>
    <table>
        <tr>
            <th>Player Name</th>
        </tr>
        <?php foreach ($players as $player): ?>
            <tr>
                <td><?php echo htmlspecialchars($player); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
