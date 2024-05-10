<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Kingdom of Social Media</title>
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
            /* Background color for the container */
            border-radius: 15px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Drop shadow */
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .profile {
            background-color: #f8f8f8;
            /* Background color for the profile */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Lighter drop shadow */
        }

        .profile h3 {
            margin-bottom: 10px;
            color: #008080;
            /* Dark cyan */
        }

        .info {
            margin-top: 20px;
        }

        .item {
            margin-bottom: 10px;
        }

        .label {
            font-weight: bold;
            color: #FF6347;
            /* Tomato */
        }

        .value {
            margin-right: 10px;
            color: #4682B4;
            /* Steel blue */
        }

        .privacy {
            padding: 8px;
            /* Increased padding for select elements */
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .feedback {
            font-style: italic;
        }

        .feedback.hidden {
            display: none;
        }
    </style>
    <link rel="stylesheet" href="header.css">
</head>
<body>
    <?php include 'header.php'?>
    <div class="container">
        <h2>Level 2: Welcome to The Kingdom of Social Media</h2>
        <div class="profile">
            <h3>Princess Profile</h3>
            <div class="info">
                <div class="item">
                    <span class="label">Birthday:</span>
                    <span class="value">January 1, 2000</span>
                    <select class="privacy" id="birthdayPrivacy" data-correct="private">
                        <option value="">Select</option>
                        <option value="public">Public</option>
                        <option value="friends">Friends Only</option>
                        <option value="private">Private</option>
                    </select>
                    <span class="feedback hidden"></span>
                </div>
                <div class="item">
                    <span class="label">School:</span>
                    <span class="value">Royal Academy</span>
                    <select class="privacy" id="schoolPrivacy" data-correct="public">
                        <option value="">Select</option>
                        <option value="public">Public</option>
                        <option value="friends">Friends Only</option>
                        <option value="private">Private</option>
                    </select>
                    <span class="feedback hidden"></span>
                </div>
                <div class="item">
                    <span class="label">Contacts:</span>
                    <span class="value">personal number</span>
                    <select class="privacy" id="contactsPrivacy" data-correct="friends">
                        <option value="">Select</option>
                        <option value="public">Public</option>
                        <option value="friends">Friends Only</option>
                        <option value="private">Private</option>
                    </select>
                    <span class="feedback hidden"></span>
                </div>
            </div>
            <button id="verifyBtn">Verify Selections</button>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectElements = document.querySelectorAll('.privacy');
            const feedbackElements = document.querySelectorAll('.feedback');
            const verifyBtn = document.getElementById('verifyBtn');

            selectElements.forEach(function(selectElement, index) {
                selectElement.addEventListener('change', function() {
                    const selectedOption = selectElement.options[selectElement.selectedIndex];
                    const correctPrivacy = selectElement.dataset.correct;
                    const feedbackElement = feedbackElements[index];

                    if (selectElement.id === 'birthdayPrivacy') {
                        if (selectedOption.value === 'public') {
                            feedbackElement.textContent = 'Incorrect Please Try Again';
                            feedbackElement.style.color = 'red';
                        } else {
                            feedbackElement.textContent = 'Correct!';
                            feedbackElement.style.color = 'green';
                        }
                    } else if (selectElement.id === 'schoolPrivacy') {
                        feedbackElement.textContent = 'Correct!';
                        feedbackElement.style.color = 'green';
                    } else if (selectElement.id === 'contactsPrivacy') {
                        if (selectedOption.value === 'public') {
                            feedbackElement.textContent = 'Incorrect Please Try Again';
                            feedbackElement.style.color = 'red';
                        } else {
                            feedbackElement.textContent = 'Correct!';
                            feedbackElement.style.color = 'green';
                        }
                    }

                    feedbackElement.classList.remove('hidden');
                });
            });

            verifyBtn.addEventListener('click', function() {
                let allCorrect = true;
                selectElements.forEach(function(selectElement, index) {
                    const correctPrivacy = selectElement.dataset.correct;
                    const feedbackElement = feedbackElements[index];

                    if (selectElement.id === 'birthdayPrivacy' && (correctPrivacy === 'private' || correctPrivacy === 'friends')) {
                        feedbackElement.textContent = 'Correct privacy setting: ' + correctPrivacy;
                        feedbackElement.style.color = 'blue';
                        feedbackElement.classList.remove('hidden');
                        allCorrect = false;
                    } else if (selectElement.id === 'schoolPrivacy' || selectElement.id === 'contactsPrivacy') {
                        feedbackElement.textContent = 'Correct privacy setting: ' + correctPrivacy;
                        feedbackElement.style.color = 'blue';
                        feedbackElement.classList.remove('hidden');
                        allCorrect = false;
                    }
                });
            });

            if (allCorrect) {
            window.location.href = 'level3.php'; // Redirect to level3.php if all selections are correct
        }
        });
    </script>
</body>

</html>