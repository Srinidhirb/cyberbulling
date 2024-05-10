<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Awareness for Teenagers</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
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

        .container {
            max-width: 800px;

            background-color: rgba(17, 34, 64, 0.9);
            /* Slightly transparent */
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            color: #8892B0;
        }

        h1 {
            color: #64FFDA;
            text-align: center;
            margin-bottom: 40px;
        }

        section {
            margin-bottom: 20px;
            padding: 20px;
            border-left: 5px solid #64FFDA;
            background-color: rgba(10, 25, 47, 0.8);
            /* Slightly transparent */
        }

        h2 {
            color: #CCD6F6;
            margin-bottom: 15px;
        }

        p {
            margin-bottom: 10px;
        }

        .tips p,
        .challenge p {
            background-color: rgba(17, 34, 64, 0.9);
            /* Slightly transparent */
            padding: 10px;
            border-radius: 10px;
        }

        .tips p::before,
        .challenge p::before {
            content: "🔑 ";
        }

        /* Additional styling for visual enhancements */
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #64FFDA;
            color: #0A192F;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #52e3c2;
        }
        .body{
            display: flex;
            justify-content: space-around;
        }
        .videos{
            margin: 100px 0px;
            width: 38%;
        }
        .videos iframe{
            margin-top: 5%;
        }
    </style>
    <link rel="stylesheet" href="header.css">

</head>
<body>
    <?php include 'header.php'?>
    <div class="body">
    <div class="container">
        <h1>Secure Your Password Knowledge</h1>

        <section id="why-strong-passwords">
            <h2>Why Strong Passwords Matter</h2>
            <p>Strong passwords are your first line of defense against unauthorized access to your personal information
                and digital profiles.</p>
        </section>

        <section id="top-tips">
            <h2>Top 5 Tips for Unbreakable Passwords</h2>
            <div class="tips">
                <p>1. Use a mix of characters, numbers, and symbols.</p>
                <p>2. Make your password long and unique.</p>
                <p>3. Avoid common words and personal info.</p>
                <p>4. Change passwords regularly.</p>
                <p>5. Use a password manager.</p>
            </div>
        </section>

        <section id="create-password">
            <h2>Challenge: Create Your Super Password!</h2>
            <div class="challenge">
                <p>Test your skills by creating a strong password that meets all the criteria mentioned above.</p>
                <!-- Example button for interactivity -->
                <a href="index.html" class="button">Take the Challenge!</a>
            </div>
        </section>
    </div>
    <div class="videos">
        <iframe width="553" height="370" src="https://www.youtube.com/embed/darh5WQO5A4" title="The Importance of Creating  a Strong Password." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="553" height="370" src="https://www.youtube.com/embed/TvrFpAFitQ0" title="Free Security Awareness Chapter 4  - How To Create a Strong Password" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>
</body>

</html>