<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cybersecurity Awareness Quiz</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
       
        background-color: #0A192F; /* Dark Blue Background */
        background-image: url('https://files.oaiusercontent.com/file-zjS1mpsBvh6UvFV4Z8tCHmJr?se=2024-02-27T06%3A42%3A52Z&sp=r&sv=2021-08-06&sr=b&rscc=max-age%3D31536000%2C%20immutable&rscd=attachment%3B%20filename%3D1e357f67-6038-471f-a4a3-99df4db7c8b5.webp&sig=Fav0Scl4fmw9JmSLBbF2QEWrAGDQadB1h4P69toSQJs%3D'); /* Main Background Image */
        background-size: cover;
        background-position: center;
        color: #FFFFFF; /* White Text for Better Contrast */
    }
    .quiz-container {
        background-color: rgba(13, 32, 50, 0.85); /* Slightly Transparent Dark Blue */
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        padding: 40px;
        max-width: 600px;
        margin: 40px auto;
        text-align: center;
    }
    .question {
        font-size: 24px;
        margin-bottom: 30px;
    }
    /* Updated Option Buttons Styles */
    .options button {
        display: block;
        width: calc(100% - 20px);
        padding: 15px;
        margin: 10px auto;
        background-color: #17a2b8; /* Teal */
        color: white;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        font-size: 18px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }
    .options button:hover {
        background-color: #138496; /* Darker Teal */
        transform: scale(1.05);
    }
    /* Updated Navigation Buttons Styles */
    .navigation button {
        padding: 10px 20px;
        background-color: #fd7e14; /* Orange */
        color: white;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
        margin: 20px 10px 0;
    }
    .navigation button:hover {
        background-color: #dc6610; /* Darker Orange */
    }
    /* Option Buttons: A cybersecurity-inspired teal for a tech feel */
    .options button {
        background-color: #17a2b8; /* Teal */
       color: white;
    }

    .options button:hover {
        background-color: #138496; /* Darker Teal */
    }

/* Navigation Buttons: A contrasting orange for visibility and action encouragement */
    .navigation button {
        background-color: #fd7e14; /* Orange */
        color: white;
    }

    .navigation button:hover {
        background-color: #dc6610; /* Darker Orange */
    }

</style>
<link rel="stylesheet" href="header.css">
</head>
<body>
    <?php include 'header.php'?>
<div class="quiz-container" id="quiz">
    <div class="question"></div>
    <div class="options"></div>
    <div class="navigation">
        <button onclick="previousQuestion()">Previous</button>
        <button onclick="nextQuestion()">Next</button>
    </div>
</div>

<script>
let currentQuestionIndex = 0;
const quizQuestions = [
    {
        question: "What is the most secure way to manage your passwords?",
        options: ["Use the same password for all accounts", "Use a password manager", "Write them down on a piece of paper", "Memorize all passwords"],
        correctAnswer: 1
    },
    {
        question: "Which of these is a strong password?",
        options: ["password123", "123456789", "letmein", "aP$1@qWz"],
        correctAnswer: 3
    },
    {
        question: "What is phishing?",
        options: ["A type of online game", "A secure way to send emails", "A method used by hackers to steal personal information", "A programming language"],
        correctAnswer: 2
    }
];

function displayQuestion(questionIndex) {
    const question = quizQuestions[questionIndex];
    document.querySelector('.question').textContent = question.question;
    const optionsContainer = document.querySelector('.options');
    optionsContainer.innerHTML = '';
    question.options.forEach((option, index) => {
        const button = document.createElement('button');
        button.textContent = option;
        button.onclick = () => checkAnswer(index === question.correctAnswer);
        optionsContainer.appendChild(button);
    });
}

function checkAnswer(isCorrect) {
    alert(isCorrect ? 'Correct!' : 'Incorrect, try again!');
}

function nextQuestion() {
    currentQuestionIndex = Math.min(currentQuestionIndex + 1, quizQuestions.length - 1);
    displayQuestion(currentQuestionIndex);
}

function previousQuestion() {
    currentQuestionIndex = Math.max(currentQuestionIndex - 1, 0);
    displayQuestion(currentQuestionIndex);
}

displayQuestion(currentQuestionIndex);
</script>
<script>
    function checkAnswer(isCorrect) {
        if (isCorrect) {
            alert('Correct!');
            nextQuestion();
        } else {
            alert('Incorrect, try again!');
        }
    }
</script>

</body>
</html>