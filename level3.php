<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Level 3: Stranger Danger</title>
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

    .scenario {
        padding: 20px;
        border-radius: 10px;
        background-color: #f8f8f8;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .scenario p {
        margin-bottom: 20px;
    }

    form label {
        display: block;
        margin-bottom: 10px;
    }

    form input {
        width: 100%;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 10px;
    }

    form button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 10px;
    }

    #feedback {
        margin-top: 20px;
        font-style: italic;
        display: none;
    }

    #timer {
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
    }

    #lifelineBtn {
        background-color: #4CAF50; /* Green */
        color: white;
    }

    #lifelineBtn:hover {
        background-color: #45a049;
    }

    #puzzleContainer {
        text-align: center;
        margin-bottom: 20px;
    }

    #puzzleImg {
        border-radius: 5px;
        margin-bottom: 10px;
    }
</style>
<link rel="stylesheet" href="header.css">
</head>
<body>
    <?php include 'header.php'?>
<div class="container">
    <h2>Level 3: Stranger Danger</h2>
    <div id="timer">Time Left: <span id="timeLeft">30</span> seconds</div>
    <div class="scenario">
        <p>A sneaky troll tries to befriend you and asks for your personal information. What would you do?</p>
        <form id="personalInfoForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required><br>
            <button type="submit" id="shareBtn">Share</button>
            <button type="button" id="declineBtn">Decline</button>
            
        </form>
        <div id="feedback"></div>
    </div>
   
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const personalInfoForm = document.getElementById('personalInfoForm');
        const feedbackDiv = document.getElementById('feedback');
        const timerSpan = document.getElementById('timeLeft');
        const puzzleInput = document.getElementById('puzzleInput');
        let timeLeft = 30; // 60 seconds timer
        let lifelineUsed = false;

        // Timer function
        const timer = setInterval(function() {
            if (timeLeft <= 0) {
                clearInterval(timer);
                handleTimeout();
            } else {
                timerSpan.textContent = timeLeft;
                timeLeft--;
            }
        }, 1000);

        // Function to handle form submission
        personalInfoForm.addEventListener('submit', function(event) {
            event.preventDefault();
            
            const trollBehavior = Math.random() < 0.5 ? 'trick' : 'harm';
            
            const feedbackMessage = trollBehavior === 'trick' ? "Oops! The troll used your information to trick others. Be cautious about sharing personal details online!" : "Good choice! You avoided potential harm by not sharing your personal information with the troll.";
            
            feedbackDiv.textContent = feedbackMessage;
            feedbackDiv.style.display = 'block';
            clearInterval(timer); // Stop the timer
        });

        // Function to handle decline button click
        document.getElementById('declineBtn').addEventListener('click', function() {
            const feedbackMessage = "Good choice! You avoided potential harm by not sharing your personal information with the troll.";
            
            feedbackDiv.textContent = feedbackMessage;
            feedbackDiv.style.display = 'block';
            clearInterval(timer); // Stop the timer
        });

        // Function to handle lifeline button click
        document.getElementById('lifelineBtn').addEventListener('click', function() {
            if (!lifelineUsed) {
                const feedbackMessage = "You asked for help! Always think twice before sharing personal information with strangers.";
                feedbackDiv.textContent = feedbackMessage;
                feedbackDiv.style.display = 'block';
                lifelineUsed = true;
            } else {
                const feedbackMessage = "You have already used your lifeline!";
                feedbackDiv.textContent = feedbackMessage;
                feedbackDiv.style.display = 'block';
            }
        });

        // Function to handle puzzle check
        document.getElementById('checkBtn').addEventListener('click', function() {
            const puzzleSolution = document.getElementById('puzzleInput').value.trim().toLowerCase();
            if (puzzleSolution === 'solution') {
                const feedbackMessage = "Congratulations! You solved the puzzle and unlocked the next level.";
                feedbackDiv.textContent = feedbackMessage;
                feedbackDiv.style.display = 'block';
                clearInterval(timer); // Stop the timer
            } else {
                const feedbackMessage = "Incorrect solution. Keep trying!";
                feedbackDiv.textContent = feedbackMessage;
                feedbackDiv.style.display = 'block';
            }
        });

        // Function to handle timeout
        function handleTimeout() {
            feedbackDiv.textContent = "Time's up! You did not respond in time.";
            feedbackDiv.style.display = 'block';
        }
    });
</script>
</body>
</html>