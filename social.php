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
        <h1>Safe Social Media Practices</h1>


        <section id="top-tips">
            <h2>Think Before You Share:</h2>
            <p>Avoid sharing personal information, this includes their :</p>

            <div class="tips">
                <p>1. Address.</p>
                <p>2.  Phone Number.</p>
                <p>3. School Name</p>
                <p>4. Change passwords regularly.</p>
                <p>5. or anything that could identify them or their location.</p>
            </div>
        </section>

        <section id="top-tips">
            <h2>Be Wary of Strangers:</h2>
          

            <div class="tips">
                <p>Don't accept friend requests from people they don't know in real life.
                    Be cautious of online offers that seem too good to be true.</p>
                <p>If someone makes them feel uncomfortable, block them and tell an adult.      </p>
                
            </div>
        </section>
        <section id="top-tips">
            <h2>Privacy Settings</h2>
          

            <div class="tips">
                <p>Adjust privacy settings on their social media accounts to control who can see their posts and information.
                </p>
                <p>Encourage them to be mindful of what they share online, even with "friends." </p>
                
            </div>
        </section>
        <section id="top-tips">
            <h2>Be Respectful:
            </h2>
          

            <div class="tips">
                <p>Treat others online the same way they would treat them in person.

                </p>
                <p>Avoid bullying, hate speech, and spreading rumors.
                </p> 
                <p>If they see someone being mistreated online, encourage them to report it to the platform or an adult. 
                </p> 
                
            </div>
        </section>
        <section id="top-tips">
            <h2> Take Breaks and Talk to Adults:

            </h2>
          

            <div class="tips">
                <p>
                    Encourage kids to take breaks from social media to avoid spending excessive time online.
                    

                </p>
                <p>Talk to them regularly about their online activities and encourage them to ask questions or share any concerns they might have.
                </p> 
                
                
            </div>
        </section>

       
        <section id="create-password">
            <h2>Challenge: Create Your Super Password!</h2>
            <div class="challenge">
                <p>Test your skills by creating a strong password that meets all the criteria mentioned above.</p>
                <!-- Example button for interactivity -->
                <a href="game.php" class="button">Take the Challenge!</a>
            </div>
        </section>
    </div>
    <div class="videos">
        <iframe width="553" height="370" src="https://www.youtube.com/embed/aCxbOOJDgiE" title="Social Media Safety - GoldPhish" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>   
        <iframe width="553" height="370" src="https://www.youtube.com/embed/BcdZm3WAF4A" title="Tip 1: Think Before You Share" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="553" height="370" src="https://www.youtube.com/embed/UTmpKeUewSw" title="Social Media Safety Tips" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>
</body>

</html>