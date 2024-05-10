<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <style>
        /* Variables */
        :root {
            --teal: #00b4cf;
            --white: #ffffff;
        }

        /* Import Google Font */
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

        /* Reset CSS */
        * {
            box-sizing: border-box;
            margin: 0;
        }

        /* Body Styles */
        .flex {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 85vh;
        }

        /* Container Styles */
        .container {
            background-color: var(--white);
            border-radius: 5px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 496px;
            min-width: 370px;
        }

        /* Heading Styles */
        h2 {
            color: #64FFDA;
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        /* Form Container Styles */
        .form-container {
            display: flex;
        }

        /* Left Container Styles */
        .left-container {
            flex: 1;
            height: 496px;
            align-items: center;
            display: flex;
            justify-content: center;
            background-color: #133245;

        }

        .left-container p {
            font-size: 0.9rem;
            color: var(--white);

        }

        /* Right Container Styles */
        .right-container {
            display: flex;
            flex: 1;
            height: 460px;
            background-color: var(--white);
            justify-content: center;
            align-items: center;
        }

        /* Right Inner Container Styles */
        .right-inner-container {
            width: 70%;
            height: 80%;
            text-align: center;
        }

        /* Left Inner Container Styles */
        .left-inner-container {
            height: 50%;
            width: 80%;
            text-align: center;
            line-height: 22px;
        }

        /* Input and Textarea Styles */
        input,
        textarea {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
            font-size: 0.8rem;
        }

        input:focus,
        textarea:focus {
            outline: 1px solid var(--teal);
        }

        /* Button Styles */
              /* Additional styling for visual enhancements */
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

        /* Responsive Styles */
        @media only screen and (max-width: 600px) {
            .left-container {
                display: none;
            }

            .lg-view {
                display: none;
            }
        }

        @media only screen and (min-width: 600px) {
            .sm-view {
                display: none;
            }
        }

        /* Additional Styles */
        form p {
            text-align: left;
        }
    </style>
    <link rel="stylesheet" href="header.css">
</head>
<body>
    <?php include 'header.php'?>
    <div class="flex">
        <div class="container">
            <div class="form-container">
                <div class="left-container">
                    <div class="left-inner-container">
                        <h2>Let's Chat</h2>
                        <p>Whether you have a question, want to start a project or simply want to connect.</p>
                        <br>
                        <p>Feel free to send me a message in the contact form</p>
                    </div>
                </div>
                <div class="right-container">
                    <div class="right-inner-container">
                        <form action="#">
                            <h2 class="lg-view" style="color: black;">Contact</h2>
                            <h2 class="sm-view">Let's Chat</h2>
                            <p>* Required</p>
                            <div class="social-container">
                                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <input type="text" placeholder="Name *" />
                            <input type="email" placeholder="Email *" />
                            <input type="text" placeholder="Company" />
                            <input type="phone" placeholder="Phone" />
                            <textarea rows="4" placeholder="Message"></textarea>
                            <button>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>