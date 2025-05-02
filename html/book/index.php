<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Book Entry & Search</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f2f2f2;
            margin: 40px auto;
            max-width: 700px;
        }
        h2 {
            color: #444;
            border-bottom: 2px solid #ccc;
            padding-bottom: 5px;
        }
        form {
            background: white;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #bbb;
            border-radius: 4px;
        }
        input[type="submit"] {
            margin-top: 15px;
            padding: 10px 20px;
            background: #0073e6;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #005bb5;
        }
    </style>
</head>
<body>
    <h2>Add New Book</h2>
    <form action="add_book.php" method="POST">
        <label>Accession No:</label>
        <input type="number" name="accession_no" required>

        <label>Title:</label>
        <input type="text" name="title" required>

        <label>Author:</label>
        <input type="text" name="author" required>

        <label>Edition:</label>
        <input type="text" name="edition" required>

        <label>Publisher:</label>
        <input type="text" name="publisher" required>

        <input type="submit" value="Add Book">
    </form>

    <h2>Search Book by Title</h2>
    <form action="search_book.php" method="GET">
        <label>Title:</label>
        <input type="text" name="title" required>
        <input type="submit" value="Search">
    </form>
</body>
</html>
