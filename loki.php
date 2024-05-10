
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Maze - Result</title>
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

        p {
            text-align: center;
            margin-top: 20px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Privacy Maze - Result</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $location = $_POST["location"];
            $privacy = $_POST["privacy"];

            if ($privacy === 'private') {
                echo "<p>Congratulations, $name from $location! You passed the maze!</p>";
            } elseif ($privacy === 'friends') {
                echo "<p>Congratulations, $name from $location! You passed the maze!</p>";
            } else {
                echo "<p>Oops, $name from $location! You did not pass the maze. Only private or friends settings are allowed.</p>";
            }
        } else {
            echo "<p>Form submission failed. Please try again.</p>";
        }
        ?>
    </div>
</body>
</html>