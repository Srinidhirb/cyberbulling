<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Maze</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form {
            text-align: center;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        #resultMessage {
            text-align: center;
            margin-top: 20px;
            font-style: italic;
            display: none;
        }

        .hidden {
            display: none;
        }
    </style><link rel="stylesheet" href="header.css">
</head>
<body>
    <?php include 'header.php'?>
    <div class="container">
        <h2>Privacy Maze</h2>
        <form method="post" action="loki.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required><br>
            <label for="privacy">Privacy Setting:</label>
            <select id="privacy" name="privacy">
                <option value="public">Public</option>
                <option value="friends">Friends Only</option>
                <option value="private">Private</option>
            </select><br>
            <button type="submit">Submit</button>
        </form>
        <div id="resultMessage" class="hidden"></div>
    </div>
</body>
</html>