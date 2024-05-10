<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Privacy Education Portal</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('bg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

        }

        .navbar {
            background-color: #002B44;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: #00FF00;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #004D66;
        }

        .container {
            padding: 20px;
            height: 90vh;
            background-color: rgba(10, 25, 47, 0.8);
        }

        h1 {
            color: #64FFDA;
            text-align: center;
        }

        .section {
            margin-top: 20px;
            padding: 20px;
            background-color: rgba(17, 34, 64, 0.9);
            color: #CCD6F6;
        }

        button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #64FFDA;
            color: #0A192F;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #52e3c2;
        }

        .flex {
            display: flex;
            justify-content: space-evenly;
        }
    </style>
    <link rel="stylesheet" href="header.css">
   
</head>
<body>
    <?php include 'header.php'?>

    <div class="container">
        <h1>Welcome to the Online Privacy Education Portal</h1>
        <div class="flex">
            <iframe width="383" height="260" src="https://www.youtube.com/embed/85mu9PLWCuI"
                title="Why Care About Internet Privacy?" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            <iframe width="383" height="260" src="https://www.youtube.com/embed/25G4tLVH1JE"
                title="Teach students internet safety and privacy" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            <iframe width="383" height="260" src="https://www.youtube.com/embed/6vNxslcf9AE"
                title="Data Protection and Privacy" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>

        </div>
        <div class="flex">
            <div class="section" id="courses">
                <h2>Online Privacy</h2>
                <p>Explore our newest courses on online privacy.</p>
                <a href="latest_cources.php"> <button>Learn More</button></a>
            </div>

            <div class="section" id="tips">
                <h2>Top Privacy Tips</h2>
                <p>Get the top tips to protect your online privacy.</p>
                <a href="tips.php"><button>Read Tips</button></a>
            </div>

            <div class="section" id="quizzes">
                <h2>Interactive Quizzes</h2>
                <p>Test your knowledge with our interactive quizzes.</p>
                <a href="quis.php"><button>Start Quiz</button></a>
            </div>
        </div>
        <br>

    </div>

    <script>
        // Example of JavaScript for navigation behavior (smooth scrolling)
        document.querySelectorAll('.navbar a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

</body>

</html>