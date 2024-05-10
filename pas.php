<?php
function check_password_strength($password) {
    // Regular expressions to check password strength
    $length_error = strlen($password) < 8;
    $digit_error = preg_match('/\d/', $password) !== 1;
    $uppercase_error = preg_match('/[A-Z]/', $password) !== 1;
    $lowercase_error = preg_match('/[a-z]/', $password) !== 1;
    $special_char_error = preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password) !== 1;
    $alphabets_only_error = ctype_alpha($password);
    $numbers_only_error = ctype_digit($password);

    // Emoji and cartoon characters
    $emoji_digit = "🔢";
    $emoji_uppercase = "🔠";
    $emoji_lowercase = "🔡";
    $emoji_special_char = "❗";
    $emoji_number = "🔢";
    $emoji_letter = "🔤";

    // Check for errors and return feedback with emojis
    $errors = [];
    if ($length_error) {
        $errors[] = "{$emoji_digit} Your password should have at least 8 characters.";
    }
    if ($digit_error) {
        $errors[] = "{$emoji_digit} Try adding a number to make your password stronger.";
    }
    if ($uppercase_error) {
        $errors[] = "{$emoji_uppercase} Add an uppercase letter to your password.";
    }
    if ($lowercase_error) {
        $errors[] = "{$emoji_lowercase} Don't forget to use a lowercase letter.";
    }
    if ($special_char_error) {
        $errors[] = "{$emoji_special_char} Include a special character like !, @, #, etc.";
    }
    if ($alphabets_only_error) {
        $errors[] = "{$emoji_number} Your password needs at least one number.";
    }
    if ($numbers_only_error) {
        $errors[] = "{$emoji_letter} Try adding letters to your password.";
    }

    if (!empty($errors)) {
        $error_list = "<ul>";
        foreach ($errors as $error) {
            $error_list .= "<li>{$error}</li>";
        }
        $error_list .= "</ul>";
        return [false, $error_list];
    } else {
        return [true, "Yea, you guessed it right!"];
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];
    list($is_valid, $message) = check_password_strength($password);
    echo json_encode(['valid' => $is_valid, 'message' => $message]);
}

// HTML template rendering can be done using PHP's echo statements
?>


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
            background-image: url('static/img/bg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .container {
            width: 600px;
            height: 70vh;
            margin: 93px auto;
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
            height: 40vh;
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
            width: 30%;
            
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #52e3c2;
        }

        p {
            color: #CCD6F6;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="password"] {
            width: 50%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #result {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
        }

        #result.valid {
            background-color: #DFF2BF;
            /* Light Green */
            border: 1px solid #4F8A10;
            /* Green */
            color: #4F8A10;
            /* Dark Green */
        }

        #result.invalid {
            background-color: #FFBABA;
            /* Light Red */
            border: 1px solid #D8000C;
            /* Red */
            color: #D8000C;
            /* Dark Red */
        }

        form .indicator {
            height: 10px;
            margin: 10px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            display: none;
        }

        form .indicator span {
            position: relative;
            height: 100%;
            width: 100%;
            background: lightgrey;
            border-radius: 5px;
        }

        form .indicator span:nth-child(2) {
            margin: 0 3px;
        }

        form .indicator span.active:before {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            border-radius: 5px;
        }

        .indicator span.weak:before {
            background-color: #ff4757;
        }

        .indicator span.medium:before {
            background-color: orange;
        }

        .indicator span.strong:before {
            background-color: #23ad5c;
        }

        form .text {
            font-size: 20px;
            font-weight: 500;
            display: none;
            margin-bottom: -10px;
        }

        form .text.weak {
            color: #ff4757;
        }

        form .text.medium {
            color: orange;
        }

        form .text.strong {
            color: #23ad5c;
        }
        #password-form{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 20vh;
        }
    </style>
    
</head>

<body>

<div class="container">
        <h1>Test Your skills</h1>

        <section id="why-strong-passwords">
            <div class="container1">

                <p>Create a strong password by including a combination of uppercase and lowercase letters, numbers, and
                    special characters.</p>
                <form id="password-form">
                    <label for="password">Enter your password:</label>
                    <input oninput="trigger()" type="password" id="password" name="password">
                    <button class="button" type="submit" id="submit-button">Test Password</button>

                    <div class="indicator">
                        <span class="weak"></span>
                        <span class="medium"></span>
                        <span class="strong"></span>
                    </div>
                </form>
                <div class="text"></div>
                <div id="result"></div>

            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function () {


                $('#password-form').submit(function (event) {
                    event.preventDefault();
                    var password = $('#password').val();
                    $.ajax({
                        type: 'POST',
                        url: '/test_password',
                        data: { password: password },
                        success: function (response) {
                            var resultDiv = $('#result');
                            resultDiv.html(response.message);
                            if (response.valid) {
                                resultDiv.addClass('valid');
                            } else {
                                resultDiv.addClass('invalid');
                            }
                        }
                    });
                });
            });
        </script>
        <script>
            const indicator = document.querySelector(".indicator");
            const input = document.querySelector("input");
            const weak = document.querySelector(".weak");
            const medium = document.querySelector(".medium");
            const strong = document.querySelector(".strong");
            const text = document.querySelector(".text");
            const showBtn = document.querySelector(".button");
            let regExpWeak = /[a-z]/;
            let regExpMedium = /\d+/;
            let regExpStrong = /.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/;
            let regExpUpperCase = /[A-Z]/; // New regular expression for uppercase letter check
            function trigger() {
                if (input.value != "") {
                    indicator.style.display = "block";
                    indicator.style.display = "flex";
                    if (input.value.length <= 3 && (input.value.match(regExpWeak) || input.value.match(regExpMedium) || input.value.match(regExpStrong) || input.value.match(regExpUpperCase))) no = 1;
                    if (input.value.length >= 6 && ((input.value.match(regExpWeak) && input.value.match(regExpMedium)) || (input.value.match(regExpMedium) && input.value.match(regExpStrong)) || (input.value.match(regExpWeak) && input.value.match(regExpStrong)) || (input.value.match(regExpWeak) && input.value.match(regExpUpperCase)) || (input.value.match(regExpMedium) && input.value.match(regExpUpperCase)) || (input.value.match(regExpStrong) && input.value.match(regExpUpperCase)))) no = 2;
                    if (input.value.length >= 6 && input.value.match(regExpWeak) && input.value.match(regExpMedium) && input.value.match(regExpStrong) && input.value.match(regExpUpperCase)) no = 3;
                    if (no == 1) {
                        weak.classList.add("active");
                        text.style.display = "block";
                        text.textContent = "Your password is too weak";
                        text.classList.add("weak");
                    }
                    if (no == 2) {
                        medium.classList.add("active");
                        text.textContent = "Your password is medium";
                        text.classList.add("medium");
                    } else {
                        medium.classList.remove("active");
                        text.classList.remove("medium");
                    }
                    if (no == 3) {
                        weak.classList.add("active");
                        medium.classList.add("active");
                        strong.classList.add("active");
                        text.textContent = "Your password is strong";
                        text.classList.add("strong");
                    } else {
                        strong.classList.remove("active");
                        text.classList.remove("strong");
                    }
                    showBtn.style.display = "block";
        
                } else {
                    indicator.style.display = "none";
                    text.style.display = "none";
                    showBtn.style.display = "none";
                }
            }
        </script>
        
    </div>

</body>

</html>
