<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Roadmap</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #3199b6;
            text-align: center;


        }

        h1 {
            color: #333;
            margin: 90px 0px 0px;
        }


        .button:first-child::after {
            display: none;
        }

        .button:last-child::after {
            border-left-color: transparent;
        }

        .flex {
            display: flex;
            justify-content: space-around;
            height: 40vh;
            align-items: center;
        }

        .button {
            border: none;
            border: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
            background-color: #3199b6;
        }

        img {
            width: 60%;
            height: 30vh;
            border-radius: 80%;
        }

        .button:hover {
            transform: scale(1.03);
        }

        * {
            margin: 0;
            padding: 0;
        }
    </style>
    <link rel="stylesheet" href="header.css">
</head>

<body>
    <?php include 'header.php' ?>
    <h1>Play Game</h1>
    <br><br><br>
    <div class="flex">
        <button class="button" onclick="startLevel(1)"><img src="l1.webp" alt=""> <br><br>
            <h3> Level 1</h3>
        </button>
        <button class="button" onclick="startLevel(2)"><img src="l2.webp" alt=""><br><br>
            <h3> Level 2</h3>
        </button>
        <button class="button" onclick="startLevel(3)"><img src="l3.webp" alt=""><br><br>
            <h3> Level 3</h3>
        </button>
    </div>
    <script>
        function startLevel(level) {
            // Redirect to the corresponding level
            window.location.href = 'level' + level + '.php';
        }
    </script>
</body>

</html>